jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'auto_repair_center_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="get-start"]').remove();
            }
        });
    });
});

// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const auto_repair_center_button = document.getElementById('install-activate-button');
    const auto_repair_center_config = window.installPluginData || window.pluginInstallerData;

    if (!auto_repair_center_button || !auto_repair_center_config) return;

    auto_repair_center_button.addEventListener('click', function (e) {
        e.preventDefault();

        const auto_repair_center_redirectUrl = auto_repair_center_button.getAttribute('data-redirect') || auto_repair_center_config.redirectUrl;

        auto_repair_center_button.textContent = 'Setting up plugins & demo...';

        const auto_repair_center_installData = new FormData();
        auto_repair_center_installData.append('action', 'install_and_activate_wordclever_plugin');
        auto_repair_center_installData.append('nonce', auto_repair_center_config.nonce);

        fetch(auto_repair_center_config.ajaxurl, {
            method: 'POST',
            body: auto_repair_center_installData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success) {
                window.location.href = auto_repair_center_redirectUrl;
            } else {
                alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                auto_repair_center_button.textContent = 'Try Again';
            }
        })
        .catch(error => {
            alert('Request failed: ' + error.message);
            auto_repair_center_button.textContent = 'Try Again';
        });
    });
});