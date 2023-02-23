# BecaGIS

## Enable WP Cron
WP Control


## Install plugins

```shell
wp plugin install better-search-replace

wp plugin install \
    redis-cache \
    broken-link-checker \
    regenerate-thumbnails
    really-simple-ssl \
    better-search-replace \

unzip \*.zip
for z in *.zip; do unzip "$z"; done
```

### List plugins
#### Required
- "wpackagist-plugin/elementor": "*",
- "wpackagist-plugin/seo-by-rank-math": "*",
- "wpackagist-plugin/redis-cache": "*",
- "wpackagist-plugin/svg-support": "*",
- "wpackagist-plugin/wpdiscuz": "*",
- "wpackagist-plugin/child-theme-configurator": "*",

#### Required Pro
- Really Simple SSL Pro
- WP Rocket
- Elementor Pro
- AnyWhere Elementor Pro
- Rank Math SEO Pro
- ACF PRO
- FileBird
- Gravity Form
- WP Mail SMTP Pro
- Slider Revolution
- Wordfence Security
- WPML

#### Optional
- "wpackagist-plugin/regenerate-thumbnails": "*"
- "wpackagist-plugin/code-snippets": "*",
- "wpackagist-plugin/query-monitor": "*",
- "wpackagist-plugin/enable-media-replace": "*",
- "wpackagist-plugin/better-search-replace": "*",
- "wpackagist-plugin/broken-link-checker": "*",
- "wpackagist-plugin/table-of-contents-plus": "*",

### Scripts
Add this before your </HEAD> tag
```shell
<script type="text/javascript"> //<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.trust-provider.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
```
	
Add this before your </BODY> tag
```shell
<script language="JavaScript" type="text/javascript">
TrustLogo("https://becagis.vn/app/uploads/2023/02/positivessl_trust_seal_lg_222x54.png", "CL1", "none");
</script>
<a  href="https://www.positivessl.com/" id="comodoTL">Positive SSL Wildcard</a>
```
