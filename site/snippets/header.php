<?php
?>
<!doctype html>
<html lang="de" id="invertme">
<head>
    <!-- Meta Styling -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Meta Information-->
    <?php echo $page->metaTags() ?>
    <!-- Stylesheets Async CSS-->
    <?= css('assets/css/index.css', true) ?>
    <!-- jQeury-->
    <?= js('assets/js/jquery.js') ?>

</head>
<body>
    <header>
       <span class="hide dark-mode-toggle">
        <span id="sun" class="pointer">
            <svg viewBox="0 0 50 50">
              <g id="sun-group">
                <path class="st0" d="M24.95,34.53c5.25,0,9.5-4.25,9.5-9.5s-4.25-9.5-9.5-9.5s-9.5,4.25-9.5,9.5S19.7,34.53,24.95,34.53z"></path>
                <line class="st0" x1="39.08" y1="25" x2="49.5" y2="25"></line>
                <line class="st0" x1="10.92" y1="25" x2="0.5" y2="25"></line>
                <line class="st0" x1="25" y1="39.08" x2="25" y2="49.5"></line>
                <line class="st0" x1="25" y1="10.92" x2="25" y2="0.5"></line>
                <line class="st0" x1="34.92" y1="14.14" x2="42.28" y2="6.78"></line>
                <line class="st0" x1="34.92" y1="35.86" x2="42.28" y2="43.23"></line>
                <line class="st0" x1="15.07" y1="14.14" x2="7.71" y2="6.78"></line>
                <line class="st0" x1="15.07" y1="35.86" x2="7.71" y2="43.23"></line>
                </g>
            </svg>
          </span>
        <!-- <span id="inverted-msg"></span>  -->
            <label class="switch">
                <span class="sliderToggle">
                    <div id="circle"></div>
                    <span class="dark">Dark</span>
                    <span class="light">Light</span>
                </span>
            </label>
        </span>
        <menu class="desktop-nav lrg-nav">
      
                <?php $items = $site->children(); $items->prepend('home', page('home'));
                  if ($items->isNotEmpty()) :?>
                <?php foreach ($items->listed() as $item) : ?>
                 
                    <a <?php e($item->isOpen(), 'class="active"') ?> href="<?= $item->url() ?>">
                        <?= $item->title()->html() ?><span class="icon-right">↗</span>
                    </a>

                <?php endforeach ?>
                <?php endif ?>
       
        </menu>

        <a href="/home" class="home-logo lrg-logo">
          <svg viewBox="0 0 1344 262" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M387.026 243.921L406.355 184.539H420.878L393.504 260.448H380.705L353.435 184.539H367.906L387.026 243.921Z" fill="currentColor"/>
            <path d="M443.445 260.448H430.281V184.539H443.445V260.448Z" fill="currentColor"/>
            <path d="M499.447 240.897C499.447 237.56 498.263 234.988 495.895 233.181C493.562 231.373 489.33 229.549 483.2 227.707C477.071 225.864 472.195 223.814 468.573 221.555C461.643 217.21 458.177 211.545 458.177 204.558C458.177 198.441 460.667 193.402 465.648 189.439C470.663 185.477 477.158 183.496 485.133 183.496C490.427 183.496 495.146 184.469 499.291 186.415C503.435 188.362 506.691 191.142 509.06 194.757C511.428 198.337 512.612 202.317 512.612 206.696H499.447C499.447 202.734 498.194 199.64 495.686 197.416C493.213 195.157 489.661 194.027 485.029 194.027C480.71 194.027 477.35 194.948 474.946 196.79C472.578 198.632 471.394 201.204 471.394 204.506C471.394 207.287 472.683 209.616 475.26 211.492C477.837 213.335 482.086 215.142 488.007 216.915C493.927 218.652 498.681 220.651 502.268 222.91C505.855 225.135 508.485 227.707 510.157 230.626C511.828 233.511 512.664 236.9 512.664 240.793C512.664 247.118 510.226 252.158 505.35 255.912C500.51 259.631 493.927 261.49 485.604 261.49C480.101 261.49 475.034 260.482 470.402 258.466C465.804 256.416 462.217 253.6 459.64 250.02C457.098 246.441 455.826 242.27 455.826 237.508H469.043C469.043 241.818 470.471 245.155 473.327 247.518C476.183 249.881 480.275 251.063 485.604 251.063C490.201 251.063 493.649 250.142 495.947 248.3C498.281 246.423 499.447 243.955 499.447 240.897Z" fill="currentColor"/>
            <path d="M579.898 184.539V235.266C579.898 243.33 577.303 249.725 572.114 254.452C566.959 259.144 560.081 261.49 551.479 261.49C542.772 261.49 535.859 259.179 530.739 254.556C525.62 249.899 523.06 243.451 523.06 235.214V184.539H536.225V235.318C536.225 240.393 537.513 244.268 540.09 246.944C542.668 249.621 546.464 250.959 551.479 250.959C561.648 250.959 566.733 245.606 566.733 234.901V184.539H579.898Z" fill="currentColor"/>
            <path d="M635.482 242.774H606.018L599.854 260.448H586.114L614.847 184.539H626.705L655.49 260.448H641.698L635.482 242.774ZM609.727 232.138H631.772L620.75 200.648L609.727 232.138Z" fill="currentColor"/>
            <path d="M677.378 249.916H711.909V260.448H664.162V184.539H677.378V249.916Z" fill="currentColor"/>
            <path d="M800.509 195.174H776.792V260.448H763.68V195.174H740.172V184.539H800.509V195.174Z" fill="currentColor"/>
            <path d="M838.488 231.2H823.756V260.448H810.539V184.539H837.287C846.063 184.539 852.837 186.502 857.608 190.43C862.379 194.357 864.765 200.04 864.765 207.478C864.765 212.553 863.529 216.81 861.056 220.251C858.618 223.657 855.205 226.282 850.817 228.124L867.9 259.77V260.448H853.742L838.488 231.2ZM823.756 220.616H837.339C841.797 220.616 845.279 219.504 847.787 217.28C850.294 215.02 851.548 211.944 851.548 208.052C851.548 203.985 850.382 200.84 848.048 198.615C845.75 196.391 842.302 195.244 837.705 195.174H823.756V220.616Z" fill="currentColor"/>
            <path d="M919.879 242.774H890.415L884.251 260.448H870.512L899.244 184.539H911.102L939.887 260.448H926.095L919.879 242.774ZM894.124 232.138H916.17L905.147 200.648L894.124 232.138Z" fill="currentColor"/>
            <path d="M1008.9 260.448H995.68L961.776 206.592V260.448H948.559V184.539H961.776L995.784 238.603V184.539H1008.9V260.448Z" fill="currentColor"/>
            <path d="M1037.73 249.916H1072.26V260.448H1024.52V184.539H1037.73V249.916Z" fill="currentColor"/>
            <path d="M1126.02 242.774H1096.56L1090.39 260.448H1076.65L1105.38 184.539H1117.24L1146.03 260.448H1132.24L1126.02 242.774ZM1100.27 232.138H1122.31L1111.29 200.648L1100.27 232.138Z" fill="currentColor"/>
            <path d="M1203.39 195.174H1179.67V260.448H1166.56V195.174H1143.05V184.539H1203.39V195.174Z" fill="currentColor"/>
            <path d="M1272.66 224.474C1272.66 231.912 1271.37 238.446 1268.79 244.077C1266.22 249.673 1262.52 253.983 1257.72 257.007C1252.95 259.996 1247.44 261.49 1241.21 261.49C1235.05 261.49 1229.54 259.996 1224.7 257.007C1219.9 253.983 1216.17 249.69 1213.52 244.129C1210.91 238.568 1209.59 232.155 1209.55 224.891V220.616C1209.55 213.213 1210.86 206.679 1213.47 201.013C1216.12 195.348 1219.83 191.021 1224.6 188.032C1229.4 185.008 1234.91 183.496 1241.11 183.496C1247.3 183.496 1252.79 184.99 1257.56 187.979C1262.37 190.934 1266.08 195.209 1268.69 200.805C1271.3 206.366 1272.62 212.848 1272.66 220.251V224.474ZM1259.44 220.512C1259.44 212.101 1257.84 205.653 1254.64 201.17C1251.47 196.686 1246.96 194.444 1241.11 194.444C1235.39 194.444 1230.92 196.686 1227.68 201.17C1224.48 205.619 1222.84 211.927 1222.77 220.095V224.474C1222.77 232.816 1224.39 239.263 1227.63 243.816C1230.9 248.37 1235.43 250.646 1241.21 250.646C1247.06 250.646 1251.55 248.422 1254.69 243.973C1257.86 239.524 1259.44 233.024 1259.44 224.474V220.512Z" fill="currentColor"/>
            <path d="M1313.77 231.2H1299.04V260.448H1285.82V184.539H1312.57C1321.35 184.539 1328.12 186.502 1332.89 190.43C1337.66 194.357 1340.05 200.04 1340.05 207.478C1340.05 212.553 1338.81 216.81 1336.34 220.251C1333.9 223.657 1330.49 226.282 1326.1 228.124L1343.18 259.77V260.448H1329.03L1313.77 231.2ZM1299.04 220.616H1312.62C1317.08 220.616 1320.56 219.504 1323.07 217.28C1325.58 215.02 1326.83 211.944 1326.83 208.052C1326.83 203.985 1325.67 200.84 1323.33 198.615C1321.03 196.391 1317.59 195.244 1312.99 195.174H1299.04V220.616Z" fill="currentColor"/>
            <path d="M87.4335 89.6401H26.4938V153.674H0.183594V2.5659H96.3769V23.7377H26.4938V68.6759H87.4335V89.6401Z" fill="currentColor"/>
            <path d="M204.955 89.6401H144.016V153.674H117.705V2.5659H213.899V23.7377H144.016V68.6759H204.955V89.6401Z" fill="currentColor"/>
            <path d="M322.477 89.6401H261.537V153.674H235.227V2.5659H331.421V23.7377H261.537V68.6759H322.477V89.6401Z" fill="currentColor"/>
            <path d="M468.285 104.481C466.76 120.602 460.798 133.195 450.398 142.258C439.999 151.253 426.168 155.75 408.905 155.75C396.842 155.75 386.2 152.913 376.979 147.24C367.828 141.497 360.757 133.368 355.765 122.851C350.773 112.334 348.173 100.122 347.965 86.2153V72.1007C347.965 57.8478 350.496 45.29 355.557 34.4274C360.618 23.5647 367.863 15.1929 377.291 9.31182C386.789 3.43076 397.743 0.490234 410.153 0.490234C426.861 0.490234 440.311 5.02211 450.502 14.0859C460.694 23.1496 466.621 35.9495 468.285 52.4857H442.079C440.831 41.623 437.642 33.8047 432.512 29.0307C427.451 24.1874 419.998 21.7658 410.153 21.7658C398.714 21.7658 389.909 25.9517 383.739 34.3236C377.638 42.6263 374.518 54.8381 374.38 70.9591V84.3472C374.38 100.676 377.291 113.13 383.115 121.709C389.008 130.289 397.605 134.578 408.905 134.578C419.235 134.578 427 132.26 432.2 127.625C437.399 122.989 440.692 115.275 442.079 104.481H468.285Z" fill="currentColor"/>
            <path d="M613.157 82.0639C613.157 96.8704 610.592 109.878 605.461 121.086C600.331 132.226 592.982 140.805 583.415 146.825C573.917 152.775 562.963 155.75 550.553 155.75C538.282 155.75 527.328 152.775 517.692 146.825C508.124 140.805 500.706 132.26 495.437 121.19C490.237 110.12 487.603 97.3547 487.534 82.8942V74.384C487.534 59.6467 490.133 46.6392 495.333 35.3614C500.602 24.0836 507.986 15.4696 517.484 9.51939C527.051 3.49995 538.005 0.490234 550.345 0.490234C562.686 0.490234 573.605 3.46536 583.103 9.4156C592.67 15.2967 600.054 23.8069 605.253 34.9463C610.453 46.0165 613.088 58.9203 613.157 73.6575V82.0639ZM586.847 74.1764C586.847 57.4327 583.658 44.5982 577.279 35.6728C570.971 26.7474 561.992 22.2847 550.345 22.2847C538.975 22.2847 530.067 26.7474 523.619 35.6728C517.241 44.529 513.982 57.0868 513.844 73.3461V82.0639C513.844 98.6693 517.068 111.504 523.515 120.568C530.032 129.631 539.045 134.163 550.553 134.163C562.2 134.163 571.144 129.735 577.383 120.879C583.692 112.023 586.847 99.0844 586.847 82.0639V74.1764Z" fill="currentColor"/>
            <path d="M695.425 95.452H666.099V153.674H639.789V2.5659H693.033C710.504 2.5659 723.989 6.47507 733.487 14.2934C742.985 22.1118 747.734 33.4241 747.734 48.2306C747.734 58.3322 745.272 66.8078 740.35 73.6575C735.497 80.438 728.703 85.6618 719.967 89.3288L753.973 152.325V153.674H725.791L695.425 95.452ZM666.099 74.384H693.137C702.011 74.384 708.944 72.1699 713.936 67.7418C718.928 63.2446 721.423 57.1213 721.423 49.3722C721.423 41.2771 719.101 35.0155 714.456 30.5874C709.88 26.1593 703.017 23.8761 693.865 23.7377H666.099V74.384Z" fill="currentColor"/>
            <path d="M799.428 97.5277V153.674H773.118V2.5659H831.042C847.958 2.5659 861.373 6.9594 871.287 15.7464C881.27 24.5334 886.262 36.1571 886.262 50.6176C886.262 65.424 881.374 76.944 871.599 85.1774C861.893 93.4109 848.27 97.5277 830.73 97.5277H799.428ZM799.428 76.4596H831.042C840.401 76.4596 847.542 74.2802 852.464 69.9213C857.387 65.4932 859.848 59.1278 859.848 50.8252C859.848 42.6609 857.352 36.1571 852.36 31.3139C847.369 26.4015 840.505 23.8761 831.77 23.7377H799.428V76.4596Z" fill="currentColor"/>
            <path d="M1007.53 153.674H905.719V136.343L956.155 81.4412C963.435 73.3461 968.6 66.6002 971.65 61.2035C974.77 55.7376 976.33 50.2716 976.33 44.8057C976.33 37.6101 974.284 31.7982 970.194 27.3701C966.173 22.942 960.731 20.728 953.867 20.728C945.686 20.728 939.343 23.2188 934.837 28.2004C930.33 33.182 928.077 39.9971 928.077 48.6457H902.807C902.807 39.4436 904.887 31.1755 909.046 23.8415C913.275 16.4383 919.272 10.6956 927.037 6.61345C934.871 2.53131 943.884 0.490234 954.075 0.490234C968.773 0.490234 980.351 4.19184 988.809 11.5951C997.336 18.9291 1001.6 29.0998 1001.6 42.1074C1001.6 49.6489 999.451 57.5711 995.152 65.8737C990.923 74.1072 983.956 83.4823 974.25 93.999L937.228 133.54H1007.53V153.674Z" fill="currentColor"/>
            <path d="M1125.88 90.0553C1125.88 111.781 1121.79 128.178 1113.61 139.249C1105.5 150.25 1093.12 155.75 1076.48 155.75C1060.12 155.75 1047.78 150.388 1039.46 139.664C1031.21 128.87 1026.98 112.922 1026.78 91.8196V65.6662C1026.78 43.9409 1030.83 27.6469 1038.94 16.7842C1047.12 5.92156 1059.57 0.490234 1076.28 0.490234C1092.85 0.490234 1105.19 5.78318 1113.3 16.3691C1121.48 26.955 1125.67 42.7992 1125.88 63.9019V90.0553ZM1100.61 61.8262C1100.61 47.6425 1098.67 37.2641 1094.79 30.6912C1090.9 24.0491 1084.73 20.728 1076.28 20.728C1068.03 20.728 1061.96 23.8761 1058.08 30.1723C1054.2 36.3993 1052.15 46.1549 1051.94 59.4392V93.6877C1051.94 107.802 1053.92 118.319 1057.87 125.238C1061.82 132.157 1068.03 135.616 1076.48 135.616C1084.6 135.616 1090.59 132.433 1094.48 126.068C1098.36 119.634 1100.4 109.601 1100.61 95.9709V61.8262Z" fill="currentColor"/>
            <path d="M1250.47 153.674H1148.67V136.343L1199.1 81.4412C1206.38 73.3461 1211.55 66.6002 1214.6 61.2035C1217.72 55.7376 1219.28 50.2716 1219.28 44.8057C1219.28 37.6101 1217.23 31.7982 1213.14 27.3701C1209.12 22.942 1203.68 20.728 1196.81 20.728C1188.63 20.728 1182.29 23.2188 1177.78 28.2004C1173.28 33.182 1171.02 39.9971 1171.02 48.6457H1145.75C1145.75 39.4436 1147.83 31.1755 1151.99 23.8415C1156.22 16.4383 1162.22 10.6956 1169.98 6.61345C1177.82 2.53131 1186.83 0.490234 1197.02 0.490234C1211.72 0.490234 1223.3 4.19184 1231.76 11.5951C1240.28 18.9291 1244.55 29.0998 1244.55 42.1074C1244.55 49.6489 1242.4 57.5711 1238.1 65.8737C1233.87 74.1072 1226.9 83.4823 1217.2 93.999L1180.18 133.54H1250.47V153.674Z" fill="currentColor"/>
            <path d="M1338.57 153.674H1313.4V32.3517L1276.27 45.0133V23.7377L1335.34 2.04698H1338.57V153.674Z" fill="currentColor"/>
          </svg>

        </a>
    </header>