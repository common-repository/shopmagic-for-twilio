<?php

namespace ShopMagicTwilioVendor\WPDesk\Tracker;

use ShopMagicTwilioVendor\WPDesk\PluginBuilder\Plugin\Hookable;
/**
 * Can add Plugin actions links: opt-in/opt-out to tracker.
 */
class PluginActionLinks implements \ShopMagicTwilioVendor\WPDesk\PluginBuilder\Plugin\Hookable
{
    /**
     * @var string
     */
    private $plugin_file;
    /**
     * @var string
     */
    private $plugin_slug;
    /**
     * @var string|null
     */
    private $shop_url;
    /**
     * @param string $plugin_file
     * @param string $plugin_slug
     * @param string|null $shop_url
     */
    public function __construct($plugin_file, $plugin_slug, $shop_url = null)
    {
        $this->plugin_file = $plugin_file;
        $this->plugin_slug = $plugin_slug;
        $this->shop_url = $shop_url;
    }
    public function hooks()
    {
        \add_filter('plugin_action_links_' . $this->plugin_file, [$this, 'append_plugin_action_links']);
    }
    /**
     * @param array $links .
     */
    public function append_plugin_action_links($links)
    {
        if (!$this->tracker_enabled() || \apply_filters('wpdesk_tracker_do_not_ask', \false) || !\is_array($links)) {
            return $links;
        }
        $tracker_consent = new \ShopMagicTwilioVendor\WPDesk_Tracker_Persistence_Consent();
        $plugin_links = [];
        if (!$tracker_consent->is_active()) {
            $opt_in_link = \admin_url('admin.php?page=wpdesk_tracker_' . $this->plugin_slug);
            if (\is_string($this->shop_url) && \strlen($this->shop_url) > 0) {
                $opt_in_link = \add_query_arg('shop_url', $this->shop_url, $opt_in_link);
            }
            $opt_in_link = \add_query_arg('plugin', $this->plugin_slug, $opt_in_link);
            $opt_in_link = \add_query_arg('ctx', 'links', $opt_in_link);
            $plugin_links[] = '<a href="' . \esc_url($opt_in_link) . '">' . \esc_html__('Enable usage tracking', 'shopmagic-for-twilio') . '</a>';
        } else {
            $opt_in_link = \admin_url('plugins.php?wpdesk_tracker_opt_out_' . $this->plugin_slug . '=1&security=' . \wp_create_nonce($this->plugin_slug));
            $opt_in_link = \add_query_arg('plugin', $this->plugin_slug, $opt_in_link);
            $opt_in_link = \add_query_arg('ctx', 'links', $opt_in_link);
            $plugin_links[] = '<a href="' . \esc_url($opt_in_link) . '">' . \esc_html__('Disable usage tracking', 'shopmagic-for-twilio') . '</a>';
        }
        return \array_merge($links, $plugin_links);
    }
    /**
     * @return bool
     */
    private function tracker_enabled()
    {
        $tracker_enabled = \true;
        if (!empty($_SERVER['SERVER_ADDR']) && $this->is_localhost($_SERVER['SERVER_ADDR'])) {
            $tracker_enabled = \false;
        }
        return (bool) \apply_filters('wpdesk_tracker_enabled', $tracker_enabled);
    }
    /**
     * @param string $address
     *
     * @return bool
     */
    private function is_localhost($address)
    {
        return \in_array($address, ['127.0.0.1', '::1'], \true);
    }
}
