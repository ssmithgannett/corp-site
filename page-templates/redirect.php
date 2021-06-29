<?php /* Template Name: Redirect */ ?>
<?php
/**
 * The template for a brief redirect passthrough
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gannett
 */

header("Access-Control-Allow-Origin: *"); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ( isset($_GET['destination']) ){
    $destination = $_GET['destination'];
    $sanitize = array("ALTER TABLE", "BETWEEN", "CREATE DATABASE", "CREATE TABLE", "CREATE INDEX", "CREATE VIEW", "DELETE", "DROP DATABASE", "DROP INDEX", "DROP TABLE", "EXISTS", "GROUP BY", "HAVING", "INSERT INTO", "INNER JOIN", "LEFT JOIN", "RIGHT JOIN", "FULL JOIN", "ORDER BY", "SELECT", "SELECT *", "SELECT DISTINCT", "SELECT INTO", "SELECT TOP", "TRUNCATE TABLE", "UNION", "UNION ALL", "UPDATE", "WHERE");
    $destination = str_ireplace($sanitize, "", $destination);
}

if ( isset($_GET['ad_id']) ){
    $ad_id = $_GET['ad_id'];
    $sanitize = array("ALTER TABLE", "BETWEEN", "CREATE DATABASE", "CREATE TABLE", "CREATE INDEX", "CREATE VIEW", "DELETE", "DROP DATABASE", "DROP INDEX", "DROP TABLE", "EXISTS", "GROUP BY", "HAVING", "INSERT INTO", "INNER JOIN", "LEFT JOIN", "RIGHT JOIN", "FULL JOIN", "ORDER BY", "SELECT", "SELECT *", "SELECT DISTINCT", "SELECT INTO", "SELECT TOP", "TRUNCATE TABLE", "UNION", "UNION ALL", "UPDATE", "WHERE");
    $ad_id = str_ireplace($sanitize, "", $ad_id);
}

else {
    $ad_id = '';
}

get_header();
?>
<div style="height:500px; margin-top: 250px;">
<p>You will be redirected shortly. If not, please <a href="<?php echo $destination ?>">click here.</a></p>
</h1>

<?php
if ( isset($destination)) { ?>
    <script>

    function callAdClick() {
        var targetUrl = '<?php echo $destination; ?>';
        window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
            'event': 'ad_click',
            'label': '<?php echo $ad_id ?>',
            'url': '<?php echo $destination ?>',
            'eventCallback': function() {
                    window.location.replace('<?php echo $destination; ?>');
                },
            'eventTimeout': 2000,
            });
    }

    jQuery('document').ready(function() {
        if (!!window.google_tag_manager) {
        callAdClick();
        } else {
        window.addEventListener('gtm_loaded', function() {
            callAdClick();
        });
        }
    })

    </script>
<?php }
?>

<?php
get_footer();
?>