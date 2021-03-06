<?php
// ------------------------------------------------------------------------
// Icofont font integration
// --
function radiantthemes_iconpicker_icofont_enqueue() {
	wp_enqueue_style( 'rt_icofont' );
}
add_action( 'vc_backend_editor_enqueue_js_css', 'radiantthemes_iconpicker_icofont_enqueue' );

function radiantthemes_iconpicker_type_icofont( $icons ) {
    $icofont_icons = array(
        array( 'icofont icofont-angry-monster' => 'Angry-Monster' ),
        array( 'icofont icofont-bathtub'       => 'Bathtub' ),
        array( 'icofont icofont-bird-wings'       => 'Bird-Wings' ),
        array( 'icofont icofont-bow'       => 'Bow' ),
        array( 'icofont icofont-brain-alt'       => 'Brain-Alt' ),
        array( 'icofont icofont-butterfly-alt'       => 'Butterfly-Alt' ),
        array( 'icofont icofont-castle'       => 'Castle' ),
        array( 'icofont icofont-circuit'       => 'Circuit' ),
        array( 'icofont icofont-dart'       => 'Dart' ),
        array( 'icofont icofont-dice-alt'       => 'Dice-Alt' ),
        array( 'icofont icofont-disability-race'       => 'Disability-Race' ),
        array( 'icofont icofont-diving-goggle'       => 'Diving-Goggle' ),
        array( 'icofont icofont-fire-alt'       => 'Fire-Alt' ),
        array( 'icofont icofont-flame-torch'       => 'Flame-Torch' ),
        array( 'icofont icofont-flora'       => 'Flora' ),
        array( 'icofont icofont-flora-flower'       => 'Flora-Flower' ),
        array( 'icofont icofont-gift-box'       => 'Gift-Box' ),
        array( 'icofont icofont-halloween-pumpkin'       => 'Halloween-Pumpkin' ),
        array( 'icofont icofont-hand-power'       => 'Hand-Power' ),
        array( 'icofont icofont-hand-thunder'       => 'Hand-Thunder' ),
        array( 'icofont icofont-king-crown'       => 'King-Crown' ),
        array( 'icofont icofont-king-monster'       => 'King-Monster' ),
        array( 'icofont icofont-love'       => 'Love' ),
        array( 'icofont icofont-magician-hat'       => 'Magician-Hat' ),
        array( 'icofont icofont-native-american'       => 'Native-American' ),
        array( 'icofont icofont-open-eye'       => 'Open-Eye' ),
        array( 'icofont icofont-owl-look'       => 'Owl-Look' ),
        array( 'icofont icofont-phoenix'       => 'Phoenix' ),
        array( 'icofont icofont-queen-crown'       => 'Queen-Crown' ),
        array( 'icofont icofont-robot-face'       => 'Robot-Face' ),
        array( 'icofont icofont-sand-clock'       => 'Sand-Clock' ),
        array( 'icofont icofont-shield-alt'       => 'Shield-Alt' ),
        array( 'icofont icofont-ship-wheel'       => 'Ship-Wheel' ),
        array( 'icofont icofont-skull-danger'       => 'Skull-Danger' ),
        array( 'icofont icofont-skull-face'       => 'Skull-Face' ),
        array( 'icofont icofont-snail'       => 'Snail' ),
        array( 'icofont icofont-snow-alt'       => 'Snow-Alt' ),
        array( 'icofont icofont-snow-flake'       => 'Snow-Flake' ),
        array( 'icofont icofont-snowmobile'       => 'Snowmobile' ),
        array( 'icofont icofont-space-shuttle'       => 'Space-Shuttle' ),
        array( 'icofont icofont-star-shape'       => 'Star-Shape' ),
        array( 'icofont icofont-swirl'       => 'Swirl' ),
        array( 'icofont icofont-tattoo-wing'       => 'Tattoo-Wing' ),
        array( 'icofont icofont-throne'       => 'Throne' ),
        array( 'icofont icofont-touch'       => 'Touch' ),
        array( 'icofont icofont-tree-alt'       => 'Tree-Alt' ),
        array( 'icofont icofont-triangle'       => 'Triangle' ),
        array( 'icofont icofont-unity-hand'       => 'Unity-Hand' ),
        array( 'icofont icofont-weed'       => 'Weed' ),
        array( 'icofont icofont-woman-bird'       => 'Woman-Bird' ),
        array( 'icofont icofont-animal-bat'       => 'Animal-Bat' ),
        array( 'icofont icofont-animal-bear'       => 'Animal-Bear' ),
        array( 'icofont icofont-animal-bear-tracks'       => 'Animal-Bear-Tracks' ),
        array( 'icofont icofont-animal-bird'       => 'Animal-Bird' ),
        array( 'icofont icofont-animal-bird-alt'       => 'Animal-Bird-Alt' ),
        array( 'icofont icofont-animal-bone'       => 'Animal-Bone' ),
        array( 'icofont icofont-animal-bull'       => 'Animal-Bull' ),
        array( 'icofont icofont-animal-camel'       => 'Animal-Camel' ),
        array( 'icofont icofont-animal-camel-alt'       => 'Animal-Camel-Alt' ),
        array( 'icofont icofont-animal-camel-head'       => 'Animal-Camel-Head' ),
        array( 'icofont icofont-animal-cat'       => 'Animal-Cat' ),
        array( 'icofont icofont-animal-cat-alt-1'       => 'Animal-Cat-Alt-1' ),
        array( 'icofont icofont-animal-cat-alt-2'       => 'Animal-Cat-Alt-2' ),
        array( 'icofont icofont-animal-cat-alt-3'       => 'Animal-Cat-Alt-3' ),
        array( 'icofont icofont-animal-cat-alt-4'       => 'Animal-Cat-Alt-4' ),
        array( 'icofont icofont-animal-cat-with-dog'       => 'Animal-Cat-With-Dog' ),
        array( 'icofont icofont-animal-cow'       => 'Animal-Cow' ),
        array( 'icofont icofont-animal-cow-head'       => 'Animal-Cow-Head' ),
        array( 'icofont icofont-animal-crab'       => 'Animal-Crab' ),
        array( 'icofont icofont-animal-crocodile'       => 'Animal-Crocodile' ),
        array( 'icofont icofont-animal-deer-head'       => 'Animal-Deer-Head' ),
        array( 'icofont icofont-animal-dog'       => 'Animal-Dog' ),
        array( 'icofont icofont-animal-dog-alt'       => 'Animal-Dog-Alt' ),
        array( 'icofont icofont-animal-dog-barking'       => 'Animal-Dog-Barking' ),
        array( 'icofont icofont-animal-dolphin'       => 'Animal-Dolphin' ),
        array( 'icofont icofont-animal-duck-tracks'       => 'Animal-Duck-Tracks' ),
        array( 'icofont icofont-animal-eagle-head'       => 'Animal-Eagle-Head' ),
        array( 'icofont icofont-animal-eaten-fish'       => 'Animal-Eaten-Fish' ),
        array( 'icofont icofont-animal-elephant'       => 'Animal-Elephant' ),
        array( 'icofont icofont-animal-elephant-alt'       => 'Animal-Elephant-Alt' ),
        array( 'icofont icofont-animal-elephant-head'       => 'Animal-Elephant-Head' ),
        array( 'icofont icofont-animal-elephant-head-alt'       => 'Animal-Elephant-Head-Alt' ),
        array( 'icofont icofont-animal-elk'       => 'Animal-Elk' ),
        array( 'icofont icofont-animal-fish'       => 'Animal-Fish' ),
        array( 'icofont icofont-animal-fish-alt-1'       => 'Animal-Fish-Alt-1' ),
        array( 'icofont icofont-animal-fish-alt-2'       => 'Animal-Fish-Alt-2' ),
        array( 'icofont icofont-animal-fish-alt-3'       => 'Animal-Fish-Alt-3' ),
        array( 'icofont icofont-animal-fish-alt-4'       => 'Animal-Fish-Alt-4' ),
        array( 'icofont icofont-animal-fox'       => 'Animal-Fox' ),
        array( 'icofont icofont-animal-fox-alt'       => 'Animal-Fox-Alt' ),
        array( 'icofont icofont-animal-frog'       => 'Animal-Frog' ),
        array( 'icofont icofont-animal-frog-tracks'       => 'Animal-Frog-Tracks' ),
        array( 'icofont icofont-animal-froggy'       => 'Animal-Froggy' ),
        array( 'icofont icofont-animal-giraffe'       => 'Animal-Giraffe' ),
        array( 'icofont icofont-animal-giraffe-alt'       => 'Giraffe-Alt' ),
        array( 'icofont icofont-animal-goat-head'       => 'Animal-Goat-Head' ),
        array( 'icofont icofont-animal-goat-head-alt-1'       => 'Animal-Goat-Head-Alt-1' ),
        array( 'icofont icofont-animal-goat-head-alt-2'       => 'Animal-Goat-Head-Alt-2' ),
        array( 'icofont icofont-animal-gorilla'       => 'Animal-Gorilla' ),
        array( 'icofont icofont-animal-hen-tracks'       => 'Animal-Hen-Tracks' ),
        array( 'icofont icofont-animal-horse-head'       => 'Animal-Horse-Head' ),
        array( 'icofont icofont-animal-horse-head-alt-1'       => 'Animal-Horse-Head-Alt-1' ),
        array( 'icofont icofont-animal-horse-head-alt-2'       => 'Animal-Horse-Head-Alt-2' ),
        array( 'icofont icofont-animal-horse-tracks'       => 'Animal-Horse-Tracks' ),
        array( 'icofont icofont-animal-jellyfish'       => 'Animal-Jellyfish' ),
        array( 'icofont icofont-animal-kangaroo'       => 'Animal-Kangaroo' ),
        array( 'icofont icofont-animal-lemur'       => 'Animal-Lemur' ),
        array( 'icofont icofont-animal-lion'       => 'Animal-Lion' ),
        array( 'icofont icofont-animal-lion-alt'       => 'Animal-Lion-Alt' ),
        array( 'icofont icofont-animal-lion-head'       => 'Animal-Lion-Head' ),
        array( 'icofont icofont-animal-lion-head-alt'       => 'Animal-Lion-Head-Alt' ),
        array( 'icofont icofont-animal-monkey'       => 'Animal-Monkey' ),
        array( 'icofont icofont-animal-monkey-alt-1'       => 'Animal-Monkey-Alt-1' ),
        array( 'icofont icofont-animal-monkey-alt-2'       => 'Animal-Monkey-Alt-2' ),
        array( 'icofont icofont-animal-monkey-alt-3'       => 'Animal-Monkey-Alt-3' ),
        array( 'icofont icofont-animal-octopus'       => 'Animal-Octopus' ),
        array( 'icofont icofont-animal-octopus-alt'       => 'Animal-Octopus-Alt' ),
        array( 'icofont icofont-animal-owl'       => 'Animal-Owl' ),
        array( 'icofont icofont-animal-panda'       => 'Animal-Panda' ),
        array( 'icofont icofont-animal-panda-alt'       => 'Animal-Panda-Alt' ),
        array( 'icofont icofont-animal-panther'       => 'Animal-Panther' ),
        array( 'icofont icofont-animal-parrot'       => 'Animal-Parrot' ),
        array( 'icofont icofont-animal-parrot-lip'       => 'Animal-Parrot-Lip' ),
        array( 'icofont icofont-animal-paw'       => 'Animal-Paw' ),
        array( 'icofont icofont-animal-pelican'       => 'Animal-Pelican' ),
        array( 'icofont icofont-animal-penguin'       => 'Animal-Penguin' ),
        array( 'icofont icofont-animal-pig'       => 'Animal-Pig' ),
        array( 'icofont icofont-animal-pig-alt'       => 'Animal-Pig-Alt' ),
        array( 'icofont icofont-animal-pigeon'       => 'Animal-Pigeon' ),
        array( 'icofont icofont-animal-pigeon-alt'       => 'Animal-Pigeon-Alt' ),
        array( 'icofont icofont-animal-pigeons'       => 'Animal-Pigeons' ),
        array( 'icofont icofont-animal-rabbit-running'       => 'Animal-Rabbit-Running' ),
        array( 'icofont icofont-animal-rat-alt'       => 'Animal-Rat-Alt' ),
        array( 'icofont icofont-animal-rhino'       => 'Animal-Rhino' ),
        array( 'icofont icofont-animal-rhino-head'       => 'Animal-Rhino-Head' ),
        array( 'icofont icofont-animal-rooster'       => 'Animal-Rooster' ),
        array( 'icofont icofont-animal-seahorse'       => 'Animal-Seahorse' ),
        array( 'icofont icofont-animal-seal'       => 'Animal-Seal' ),
        array( 'icofont icofont-animal-shrimp'       => 'Animal-Shrimp' ),
        array( 'icofont icofont-animal-snail'       => 'Animal-Snail' ),
        array( 'icofont icofont-animal-snail-alt-1'       => 'Animal-Snail-Alt-1' ),
        array( 'icofont icofont-animal-snail-alt-2'       => 'Animal-Snail-Alt-2' ),
        array( 'icofont icofont-animal-snake'       => 'Animal-Snake' ),
        array( 'icofont icofont-animal-squid'       => 'Animal-Squid' ),
        array( 'icofont icofont-animal-squirrel'       => 'Animal-Squirrel' ),
        array( 'icofont icofont-brand-acer'       => 'Brand-Acer' ),
        array( 'icofont icofont-brand-adidas'       => 'Brand-Adidas' ),
        array( 'icofont icofont-brand-adobe'       => 'Brand-Adobe' ),
        array( 'icofont icofont-brand-air-new-zealand'       => 'Brand-Air-New-Zealand' ),
        array( 'icofont icofont-brand-airbnb'       => 'Brand-Airbnb' ),
        array( 'icofont icofont-brand-aircell'       => 'Brand-Aircell' ),
        array( 'icofont icofont-brand-airtel'       => 'Brand-Airtel' ),
        array( 'icofont icofont-brand-alcatel'       => 'Brand-Alcatel' ),
        array( 'icofont icofont-brand-alibaba'       => 'Brand-Alibaba' ),
        array( 'icofont icofont-brand-aliexpress'       => 'Brand-AliExpress' ),
        array( 'icofont icofont-brand-alipay'       => 'Brand-Alipay' ),
        array( 'icofont icofont-brand-amazon'       => 'Brand-Amazon' ),
        array( 'icofont icofont-brand-amd'       => 'Brand-Amd' ),
        array( 'icofont icofont-brand-american-airlines'       => 'Brand-American-Airlines' ),
        array( 'icofont icofont-brand-android'       => 'Brand-Android' ),
        array( 'icofont icofont-brand-android-robot'       => 'Brand-Android-Robot' ),
        array( 'icofont icofont-brand-aol'       => 'Brand-AOL' ),
        array( 'icofont icofont-brand-apple'       => 'Brand-Apple' ),
        array( 'icofont icofont-brand-appstore'       => 'Brand-Appstore' ),
        array( 'icofont icofont-brand-asus'       => 'Brand-Asus' ),
        array( 'icofont icofont-brand-ati'       => 'Brand-Ati' ),
        array( 'icofont icofont-brand-att'       => 'Brand-Att' ),
        array( 'icofont icofont-brand-audi'       => 'Brand-Audi' ),
        array( 'icofont icofont-brand-axiata'       => 'Brand-Axiata' ),
        array( 'icofont icofont-brand-bada'       => 'Brand-Bada' ),
        array( 'icofont icofont-brand-bbc'       => 'Brand-Bbc' ),
        array( 'icofont icofont-brand-bing'       => 'Brand-Bing' ),
        array( 'icofont icofont-brand-blackberry'       => 'Brand-BlackBerry' ),
        array( 'icofont icofont-brand-bmw'       => 'Brand-BMW' ),
        array( 'icofont icofont-brand-box'       => 'Brand-Box' ),
        array( 'icofont icofont-brand-burger-king'       => 'Brand-Burger-King' ),
        array( 'icofont icofont-brand-business-insider'       => 'Brand-Business-Insider' ),
        array( 'icofont icofont-brand-buzzfeed'       => 'Brand-BuzzFeed' ),
        array( 'icofont icofont-brand-cannon'       => 'Brand-Cannon' ),
        array( 'icofont icofont-brand-casio'       => 'Brand-Casio' ),
        array( 'icofont icofont-brand-china-mobile'       => 'Brand-China-Mobile' ),
        array( 'icofont icofont-brand-china-telecom'       => 'Brand-China-Telecom' ),
        array( 'icofont icofont-brand-china-unicom'       => 'Brand-China-Unicom' ),
        array( 'icofont icofont-brand-cisco'       => 'Brand-Cisco' ),
        array( 'icofont icofont-brand-citibank'       => 'Brand-Citibank' ),
        array( 'icofont icofont-brand-cnet'       => 'Brand-CNET' ),
        array( 'icofont icofont-brand-cnn'       => 'Brand-CNN' ),
        array( 'icofont icofont-brand-cocal-cola'       => 'Brand-Cocal-Cola' ),
        array( 'icofont icofont-brand-compaq'       => 'Brand-Compaq' ),
        array( 'icofont icofont-brand-copy'       => 'Brand-Copy' ),
        array( 'icofont icofont-brand-debian'       => 'Brand-Debian' ),
        array( 'icofont icofont-brand-delicious'       => 'Brand-Delicious' ),
        array( 'icofont icofont-brand-dell'       => 'Brand-Dell' ),
        array( 'icofont icofont-brand-designbump'       => 'Brand-DesignBump' ),
        array( 'icofont icofont-brand-designfloat'       => 'Brand-Designfloat' ),
        array( 'icofont icofont-brand-disney'       => 'Brand-Disney' ),
        array( 'icofont icofont-brand-dodge'       => 'Brand-Dodge' ),
        array( 'icofont icofont-brand-dove'       => 'Brand-Dove' ),
        array( 'icofont icofont-brand-ebay'       => 'Brand-eBay' ),
        array( 'icofont icofont-brand-eleven'       => 'Brand-Eleven' ),
        array( 'icofont icofont-brand-emirates'       => 'Brand-Emirates' ),
        array( 'icofont icofont-brand-espn'       => 'Brand-ESPN' ),
        array( 'icofont icofont-brand-etihad-airways'       => 'Etihad-Airways' ),
        array( 'icofont icofont-brand-etisalat'       => 'Brand-Etisalat' ),
        array( 'icofont icofont-brand-etsy'       => 'Brand-Etsy' ),
        array( 'icofont icofont-brand-facebook'       => 'Brand-Facebook' ),
        array( 'icofont icofont-brand-fastrack'       => 'Brand-Fastrack' ),
        array( 'icofont icofont-brand-fedex'       => 'Brand-FedEx' ),
        array( 'icofont icofont-brand-ferrari'       => 'Brand-Ferrari' ),
        array( 'icofont icofont-brand-fitbit'       => 'Brand-Fitbit' ),
        array( 'icofont icofont-brand-flikr'       => 'Brand-Flikr' ),
        array( 'icofont icofont-brand-forbes'       => 'Brand-Forbes' ),
        array( 'icofont icofont-brand-foursquare'       => 'Brand-Foursquare' ),
        array( 'icofont icofont-brand-fox'       => 'Brand-FOX' ),
        array( 'icofont icofont-brand-foxconn'       => 'Brand-Foxconn' ),
        array( 'icofont icofont-brand-fujitsu'       => 'Brand-Fujitsu' ),
        array( 'icofont icofont-brand-general-electric'       => 'Brand-General-Electric' ),
        array( 'icofont icofont-brand-gillette'       => 'Brand-Gillette' ),
        array( 'icofont icofont-brand-gizmodo'       => 'Brand-Gizmodo' ),
        array( 'icofont icofont-brand-gnome'       => 'Brand-GNOME' ),
        array( 'icofont icofont-brand-google'       => 'Brand-Google' ),
        array( 'icofont icofont-brand-gopro'       => 'Brand-GoPro' ),
        array( 'icofont icofont-brand-gucci'       => 'Brand-Gucci' ),
        array( 'icofont icofont-brand-hallmark'       => 'Brand-Hallmark' ),
        array( 'icofont icofont-brand-hi5'       => 'Brand-Hi5' ),
        array( 'icofont icofont-brand-honda'       => 'Brand-Honda' ),
        array( 'icofont icofont-brand-hp'       => 'Brand-Hp' ),
        array( 'icofont icofont-brand-hsbc'       => 'Brand-HSBC' ),
        array( 'icofont icofont-brand-htc'       => 'Brand-HTC' ),
        array( 'icofont icofont-brand-huawei'       => 'Brand-Huawei' ),
        array( 'icofont icofont-brand-hulu'       => 'Brand-Hulu' ),
        array( 'icofont icofont-brand-hyundai'       => 'Brand-Hyundai' ),
        array( 'icofont icofont-brand-ibm'       => 'Brand-IBM' ),
        array( 'icofont icofont-brand-icofont'       => 'Brand-IcoFont' ),
        array( 'icofont icofont-brand-icq'       => 'Brand-ICQ' ),
        array( 'icofont icofont-brand-ikea'       => 'Brand-IKEA' ),
        array( 'icofont icofont-brand-imdb'       => 'Brand-IMDb' ),
        array( 'icofont icofont-brand-indiegogo'       => 'Brand-Indiegogo' ),
        array( 'icofont icofont-brand-intel'       => 'Brand-Intel' ),
        array( 'icofont icofont-brand-ipair'       => 'Brand-iPair' ),
        array( 'icofont icofont-brand-jaguar'       => 'Brand-Jaguar' ),
        array( 'icofont icofont-brand-java'       => 'Brand-Java' ),
        array( 'icofont icofont-brand-joomla'       => 'Brand-Joomla' ),
        array( 'icofont icofont-brand-joomshaper'       => 'Brand-JoomShaper' ),
        array( 'icofont icofont-brand-kickstarter'       => 'Brand-Kickstarter' ),
        array( 'icofont icofont-brand-kik'       => 'Brand-Kik' ),
        array( 'icofont icofont-brand-lastfm'       => 'Brand-Lastfm' ),
        array( 'icofont icofont-brand-lego'       => 'Brand-Lego' ),
        array( 'icofont icofont-brand-lenovo'       => 'Brand-Lenovo' ),
        array( 'icofont icofont-brand-levis'       => 'Brand-Levis' ),
        array( 'icofont icofont-brand-lexus'       => 'Brand-Lexus' ),
        array( 'icofont icofont-brand-lg'       => 'Brand-Lg' ),
        array( 'icofont icofont-brand-life-hacker'       => 'Brand-Life-Hacker' ),
        array( 'icofont icofont-brand-line-messenger'       => 'Brand-Line-Messenger' ),
        array( 'icofont icofont-brand-linkedin'       => 'Brand-Linkedin' ),
        array( 'icofont icofont-brand-linux'       => 'Brand-Linux' ),
        array( 'icofont icofont-brand-linux-mint'       => 'Linux-Mint' ),
        array( 'icofont icofont-brand-lionix'       => 'Brand-Lionix' ),
        array( 'icofont icofont-brand-live-messenger'       => 'Brand-Live-Messenger' ),
        array( 'icofont icofont-brand-loreal'       => 'Brand-LOreal' ),
        array( 'icofont icofont-brand-louis-vuitton'       => 'Brand-Louis-Vuitton' ),
        array( 'icofont icofont-brand-mac-os'       => 'Brand-mac-Os' ),
        array( 'icofont icofont-brand-marvel-app'       => 'Brand-Marvel-App' ),
        array( 'icofont icofont-brand-mashable'       => 'Brand-Mashable' ),
        array( 'icofont icofont-brand-mazda'       => 'Brand-Mazda' ),
        array( 'icofont icofont-brand-mcdonals'       => 'Brand-McDonals' ),
        array( 'icofont icofont-brand-mercedes'       => 'Brand-Mercedes' ),
        array( 'icofont icofont-brand-micromax'       => 'Brand-Micromax' ),
        array( 'icofont icofont-brand-microsoft'       => 'Brand-Microsoft' ),
        array( 'icofont icofont-brand-mobileme'       => 'Brand-MobileMe' ),
        array( 'icofont icofont-brand-mobily'       => 'Brand-Mobily' ),
        array( 'icofont icofont-brand-motorola'       => 'Brand-Motorola' ),
        array( 'icofont icofont-brand-msi'       => 'Brand-Msi' ),
        array( 'icofont icofont-brand-mts'       => 'Brand-MTS' ),
        array( 'icofont icofont-brand-myspace'       => 'Brand-Myspace' ),
        array( 'icofont icofont-brand-mytv'       => 'Brand-MYTV' ),
        array( 'icofont icofont-brand-nasa'       => 'Brand-NASA' ),
        array( 'icofont icofont-brand-natgeo'       => 'Brand-Natgeo' ),
        array( 'icofont icofont-brand-nbc'       => 'Brand-NBC' ),
        array( 'icofont icofont-brand-nescafe'       => 'Brand-Nescafe' ),
        array( 'icofont icofont-brand-nestle'       => 'Brand-Nestle' ),
        array( 'icofont icofont-brand-netflix'       => 'Brand-Netflix' ),
        array( 'icofont icofont-brand-nexus'       => 'Brand-Nexus' ),
        array( 'icofont icofont-brand-nike'       => 'Brand-Nike' ),
        array( 'icofont icofont-brand-nokia'       => 'Brand-Nokia' ),
        array( 'icofont icofont-brand-nvidia'       => 'Brand-Nvidia' ),
        array( 'icofont icofont-brand-omega'       => 'Brand-Omega' ),
        array( 'icofont icofont-brand-opensuse'       => 'Brand-openSUSE' ),
        array( 'icofont icofont-brand-oracle'       => 'Brand-Oracle' ),
        array( 'icofont icofont-brand-panasonic'       => 'Brand-Panasonic' ),
        array( 'icofont icofont-brand-paypal'       => 'Brand-PayPal' ),
        array( 'icofont icofont-brand-pepsi'       => 'Brand-Pepsi' ),
        array( 'icofont icofont-brand-philips'       => 'Brand-Philips' ),
        array( 'icofont icofont-brand-pizza-hut'       => 'Brand-Pizza-Hut' ),
        array( 'icofont icofont-brand-playstation'       => 'Brand-PlayStation' ),
        array( 'icofont icofont-brand-puma'       => 'Brand-Puma' ),
        array( 'icofont icofont-brand-qatar-air'       => 'Brand-Qatar-Air' ),
        array( 'icofont icofont-brand-qvc'       => 'Brand-QVC' ),
        array( 'icofont icofont-brand-readernaut'       => 'Brand-Readernaut' ),
        array( 'icofont icofont-brand-redbull'       => 'Brand-Redbull' ),
        array( 'icofont icofont-brand-reebok'       => 'Brand-Reebok' ),
        array( 'icofont icofont-brand-reuters'       => 'Brand-Reuters' ),
        array( 'icofont icofont-brand-samsung'       => 'Brand-Samsung' ),
        array( 'icofont icofont-brand-sap'       => 'Brand-Sap' ),
        array( 'icofont icofont-brand-saudia-airlines'       => 'Brand-Saudia-Airlines' ),
        array( 'icofont icofont-brand-scribd'       => 'Brand-Scribd' ),
        array( 'icofont icofont-brand-shell'       => 'Brand-Shell' ),
        array( 'icofont icofont-brand-siemens'       => 'Brand-Siemens' ),
        array( 'icofont icofont-brand-sk-telecom'       => 'Brand-Sk-Telecom' ),
        array( 'icofont icofont-brand-slideshare'       => 'Brand-SlideShare' ),
        array( 'icofont icofont-brand-smashing-magazine'       => 'Brand-Smashing-Magazine' ),
        array( 'icofont icofont-brand-snapchat'       => 'Brand-Snapchat' ),
        array( 'icofont icofont-brand-sony'       => 'Brand-Sony' ),
        array( 'icofont icofont-brand-sony-ericsson'       => 'Sony-Ericsson' ),
        array( 'icofont icofont-brand-soundcloud'       => 'Brand-SoundCloud' ),
        array( 'icofont icofont-brand-sprint'       => 'Brand-Sprint' ),
        array( 'icofont icofont-brand-squidoo'       => 'Brand-Squidoo' ),
        array( 'icofont icofont-brand-starbucks'       => 'Brand-Starbucks' ),
        array( 'icofont icofont-brand-stc'       => 'Brand-STC' ),
        array( 'icofont icofont-brand-steam'       => 'Brand-Steam' ),
        array( 'icofont icofont-brand-suzuki'       => 'Brand-Suzuki' ),
        array( 'icofont icofont-brand-symbian'       => 'Brand-Symbian' ),
        array( 'icofont icofont-brand-t-mobile'       => 'Brand-T-Mobile' ),
        array( 'icofont icofont-brand-tango'       => 'Brand-Tango' ),
        array( 'icofont icofont-brand-target'       => 'Brand-Target' ),
        array( 'icofont icofont-brand-tata-indicom'       => 'Brand-Tata-Indicom' ),
        array( 'icofont icofont-brand-techcrunch'       => 'Brand-TechCrunch' ),
        array( 'icofont icofont-brand-telenor'       => 'Brand-Telenor' ),
        array( 'icofont icofont-brand-teliasonera'       => 'Brand-Teliasonera' ),
        array( 'icofont icofont-brand-tesla'       => 'Brand-Tesla' ),
        array( 'icofont icofont-brand-the-verge'       => 'Brand-The-Verge' ),
        array( 'icofont icofont-brand-thenextweb'       => 'Brand-Thenextweb' ),
        array( 'icofont icofont-brand-toshiba'       => 'Brand-Toshiba' ),
        array( 'icofont icofont-brand-toyota'       => 'Brand-Toyota' ),
        array( 'icofont icofont-brand-tribenet'       => 'Brand-Tribenet' ),
        array( 'icofont icofont-brand-ubuntu'       => 'Brand-Ubuntu' ),
        array( 'icofont icofont-brand-unilever'       => 'Brand-Unilever' ),
        array( 'icofont icofont-brand-vaio'       => 'Brand-VAIO' ),
        array( 'icofont icofont-brand-verizon'       => 'Brand-Verizon' ),
        array( 'icofont icofont-brand-viber'       => 'Brand-Viber' ),
        array( 'icofont icofont-brand-vodafone'       => 'Brand-Vodafone' ),
        array( 'icofont icofont-brand-volkswagen'       => 'Brand-Volkswagen' ),
        array( 'icofont icofont-brand-walmart'       => 'Brand-Walmart' ),
        array( 'icofont icofont-brand-warnerbros'       => 'Brand-WarnerBros' ),
        array( 'icofont icofont-brand-whatsapp'       => 'Brand-WhatsApp' ),
        array( 'icofont icofont-brand-wikipedia'       => 'Brand-Wikipedia' ),
        array( 'icofont icofont-brand-windows'       => 'Brand-Windows' ),
        array( 'icofont icofont-brand-wire'       => 'Brand-Wire' ),
        array( 'icofont icofont-brand-wordpress'       => 'Brand-WordPress' ),
        array( 'icofont icofont-brand-xiaomi'       => 'Brand-Xiaomi' ),
        array( 'icofont icofont-brand-yahoobuzz'       => 'Brand-YahooBuzz' ),
        array( 'icofont icofont-brand-yamaha'       => 'Brand-Yamaha' ),
        array( 'icofont icofont-brand-youtube'       => 'Brand-YouTube' ),
        array( 'icofont icofont-brand-zain'       => 'Brand-Zain' ),
        array( 'icofont icofont-social-envato'       => 'Social-Envato' ),
        array( 'icofont icofont-bank-alt'       => 'Bank-Alt' ),
        array( 'icofont icofont-barcode'       => 'Barcode' ),
        array( 'icofont icofont-basket'       => 'Basket' ),
        array( 'icofont icofont-bill-alt'       => 'Bill-Alt' ),
        array( 'icofont icofont-billboard'       => 'Billboard' ),
        array( 'icofont icofont-briefcase-alt-1'       => 'Briefcase-Alt-1' ),
        array( 'icofont icofont-briefcase-alt-2'       => 'Briefcase-Alt-2' ),
        array( 'icofont icofont-building-alt'       => 'Building-Alt' ),
        array( 'icofont icofont-businessman'       => 'Businessman' ),
        array( 'icofont icofont-businesswoman'       => 'Businesswoman' ),
        array( 'icofont icofont-cart-alt'       => 'Cart-Alt' ),
        array( 'icofont icofont-chair'       => 'Chair' ),
        array( 'icofont icofont-clip'       => 'Clip' ),
        array( 'icofont icofont-coins'       => 'Coins' ),
        array( 'icofont icofont-company'       => 'Company' ),
        array( 'icofont icofont-contact-add'       => 'Contact-Add' ),
        array( 'icofont icofont-deal'       => 'Deal' ),
        array( 'icofont icofont-files'       => 'Files' ),
        array( 'icofont icofont-growth'       => 'Growth' ),
        array( 'icofont icofont-id-card'       => 'Id-Card' ),
        array( 'icofont icofont-idea'       => 'Idea' ),
        array( 'icofont icofont-list'       => 'List' ),
        array( 'icofont icofont-meeting-add'       => 'Meeting-Add' ),
        array( 'icofont icofont-money-bag'       => 'Money-Bag' ),
        array( 'icofont icofont-people'       => 'People' ),
        array( 'icofont icofont-pie-chart'       => 'Pie-Chart' ),
        array( 'icofont icofont-presentation-alt'       => 'Presentation-Alt' ),
        array( 'icofont icofont-stamp'       => 'Stamp' ),
        array( 'icofont icofont-stock-mobile'       => 'Stock-Mobile' ),
        array( 'icofont icofont-support'       => 'Support' ),
        array( 'icofont icofont-tasks-alt'       => 'Tasks-Alt' ),
        array( 'icofont icofont-wheel'       => 'Wheel' ),
        array( 'icofont icofont-chart-arrows-axis'       => 'Chart-Arrows-Axis' ),
        array( 'icofont icofont-chart-bar-graph'       => 'Chart-Bar-Graph' ),
        array( 'icofont icofont-chart-flow'       => 'Chart-Flow' ),
        array( 'icofont icofont-chart-flow-alt-1'       => 'Chart-Flow-Alt-1' ),
        array( 'icofont icofont-chart-flow-alt-2'       => 'Chart-Flow-Alt-2' ),
        array( 'icofont icofont-chart-histogram'       => 'Chart-Histogram' ),
        array( 'icofont icofont-chart-histogram-alt'       => 'Chart-Histogram-Alt' ),
        array( 'icofont icofont-chart-line'       => 'Chart-Line' ),
        array( 'icofont icofont-chart-line-alt'       => 'Chart-Line-Alt' ),
        array( 'icofont icofont-chart-pie'       => 'Chart-Pie' ),
        array( 'icofont icofont-chart-pie-alt'       => 'Chart-Pie-Alt' ),
        array( 'icofont icofont-chart-radar-graph'       => 'Chart-Radar-Graph' ),
        array( 'icofont icofont-architecture'       => 'Architecture' ),
        array( 'icofont icofont-architecture-alt'       => 'Architecture-Alt' ),
        array( 'icofont icofont-barricade'       => 'Barricade' ),
        array( 'icofont icofont-bricks'       => 'Bricks' ),
        array( 'icofont icofont-calculations'       => 'Calculations' ),
        array( 'icofont icofont-cement-mix'       => 'Cement-Mix' ),
        array( 'icofont icofont-cement-mixer'       => 'Cement-Mixer' ),
        array( 'icofont icofont-danger-zone'       => 'Danger-Zone' ),
        array( 'icofont icofont-drill'       => 'Drill' ),
        array( 'icofont icofont-eco-energy'       => 'Eco-Energy' ),
        array( 'icofont icofont-eco-environmen'       => 'Eco-Environmen' ),
        array( 'icofont icofont-energy-air'       => 'Energy-Air' ),
        array( 'icofont icofont-energy-oil'       => 'Energy-Oil' ),
        array( 'icofont icofont-energy-savings'       => 'Energy-Savings' ),
        array( 'icofont icofont-energy-solar'       => 'Energy-Solar' ),
        array( 'icofont icofont-energy-water'       => 'Energy-Water' ),
        array( 'icofont icofont-engineer'       => 'Engineer' ),
        array( 'icofont icofont-fire-extinguisher-alt'       => 'Fire-Extinguisher-Alt' ),
        array( 'icofont icofont-fix-tools'       => 'Fix-Tools' ),
        array( 'icofont icofont-glue-oil'       => 'Glue-Oil' ),
        array( 'icofont icofont-hammer-alt'       => 'Hammer-Alt' ),
        array( 'icofont icofont-help-robot'       => 'Help-Robot' ),
        array( 'icofont icofont-industries'       => 'Industries' ),
        array( 'icofont icofont-industries-alt-1'       => 'Industries-Alt-1' ),
        array( 'icofont icofont-industries-alt-2'       => 'Industries-Alt-2' ),
        array( 'icofont icofont-industries-alt-3'       => 'Industries-Alt-3' ),
        array( 'icofont icofont-industries-alt-4'       => 'Industries-Alt-4' ),
        array( 'icofont icofont-industries-alt-5'       => 'Industries-Alt-5' ),
        array( 'icofont icofont-labour'       => 'Labour' ),
        array( 'icofont icofont-mining'       => 'Mining' ),
        array( 'icofont icofont-paint-brush'       => 'Paint-Brush' ),
        array( 'icofont icofont-pollution'       => 'Pollution' ),
        array( 'icofont icofont-power-zone'       => 'Power-Zone' ),
        array( 'icofont icofont-radio-active'       => 'Radio-Active' ),
        array( 'icofont icofont-recycle-alt'       => 'Recycle-Alt' ),
        array( 'icofont icofont-recycling-man'       => 'Recycling-Man' ),
        array( 'icofont icofont-safety-hat'       => 'Safety-Hat' ),
        array( 'icofont icofont-safety-hat-light'       => 'Safety-Hat-Light' ),
        array( 'icofont icofont-saw'       => 'Saw' ),
        array( 'icofont icofont-screw-driver'       => 'Screw-Driver' ),
        array( 'icofont icofont-settings-alt'       => 'Settings-Alt' ),
        array( 'icofont icofont-tools-alt-1'       => 'Tools-Alt-1' ),
        array( 'icofont icofont-tools-alt-2'       => 'Tools-Alt-2' ),
        array( 'icofont icofont-tools-bag'       => 'Tools-Bag' ),
        array( 'icofont icofont-trolley'       => 'Trolley' ),
        array( 'icofont icofont-trowel'       => 'Trowel' ),
        array( 'icofont icofont-under-construction'       => 'Under-Construction' ),
        array( 'icofont icofont-under-construction-alt'       => 'Under-Construction-Alt' ),
        array( 'icofont icofont-vehicle-cement'       => 'Vehicle-Cement' ),
        array( 'icofont icofont-vehicle-crane'       => 'Vehicle-Crane' ),
        array( 'icofont icofont-vehicle-delivery-van'       => 'Vehicle-Delivery-Van' ),
        array( 'icofont icofont-vehicle-dozer'       => 'Vehicle-Dozer' ),
        array( 'icofont icofont-vehicle-excavator'       => 'Vehicle-Excavator' ),
        array( 'icofont icofont-vehicle-trucktor'       => 'Vehicle-Trucktor' ),
        array( 'icofont icofont-vehicle-wrecking'       => 'Vehicle-Wrecking' ),
        array( 'icofont icofont-worker'       => 'Worker' ),
        array( 'icofont icofont-worker-group'       => 'Worker-Group' ),
        array( 'icofont icofont-wrench'       => 'Wrench' ),
        array( 'icofont icofont-cur-afghani'       => 'Cur-Afghani' ),
        array( 'icofont icofont-cur-afghani-false'       => 'Cur-Afghani-False' ),
        array( 'icofont icofont-cur-afghani-minus'       => 'Cur-Afghani-Minus' ),
        array( 'icofont icofont-cur-afghani-plus'       => 'Cur-Afghani-Plus' ),
        array( 'icofont icofont-cur-afghani-true'       => 'Cur-Afghani-True' ),
        array( 'icofont icofont-cur-baht'       => 'Cur-Baht' ),
        array( 'icofont icofont-cur-baht-false'       => 'Cur-Baht-False' ),
        array( 'icofont icofont-cur-baht-minus'       => 'Cur-Baht-Minus' ),
        array( 'icofont icofont-cur-baht-plus'       => 'Cur-Baht-Plus' ),
        array( 'icofont icofont-cur-baht-true'       => 'Cur-Baht-True' ),
        array( 'icofont icofont-cur-bitcoin'       => 'Cur-Bitcoin' ),
        array( 'icofont icofont-cur-bitcoin-false'       => 'Cur-Bitcoin-False' ),
        array( 'icofont icofont-cur-bitcoin-minus'       => 'Cur-Bitcoin-Minus' ),
        array( 'icofont icofont-cur-bitcoin-plus'       => 'Cur-Bitcoin-Plus' ),
        array( 'icofont icofont-cur-bitcoin-true'       => 'Cur-Bitcoin-True' ),
        array( 'icofont icofont-cur-dollar'       => 'Cur-Dollar' ),
        array( 'icofont icofont-cur-dollar-flase'       => 'Cur-Dollar-Flase' ),
        array( 'icofont icofont-cur-dollar-minus'       => 'Cur-Dollar-Minus' ),
        array( 'icofont icofont-cur-dollar-plus'       => 'Cur-Dollar-Plus' ),
        array( 'icofont icofont-cur-dollar-true'       => 'Cur-Dollar-True' ),
        array( 'icofont icofont-cur-dong'       => 'Cur-Dong' ),
        array( 'icofont icofont-cur-dong-false'       => 'Cur-Dong-False' ),
        array( 'icofont icofont-cur-dong-minus'       => 'Cur-Dong-Minus' ),
        array( 'icofont icofont-cur-dong-plus'       => 'Cur-Dong-Plus' ),
        array( 'icofont icofont-cur-dong-true'       => 'Cur-Dong-True' ),
        array( 'icofont icofont-cur-euro'       => 'Cur-Euro' ),
        array( 'icofont icofont-cur-euro-false'       => 'Cur-Euro-False' ),
        array( 'icofont icofont-cur-euro-minus'       => 'Cur-Euro-Minus' ),
        array( 'icofont icofont-cur-euro-plus'       => 'Cur-Euro-Plus' ),
        array( 'icofont icofont-cur-euro-true'       => 'Cur-Euro-True' ),
        array( 'icofont icofont-cur-frank'       => 'Cur-Frank' ),
        array( 'icofont icofont-cur-frank-false'       => 'Cur-Frank-False' ),
        array( 'icofont icofont-cur-frank-minus'       => 'Cur-Frank-Minus' ),
        array( 'icofont icofont-cur-frank-plus'       => 'Cur-Frank-Plus' ),
        array( 'icofont icofont-cur-frank-true'       => 'Cur-Frank-True' ),
        array( 'icofont icofont-cur-hryvnia'       => 'Cur-Hryvnia' ),
        array( 'icofont icofont-cur-hryvnia-false'       => 'Cur-Gryvnia-False' ),
        array( 'icofont icofont-cur-hryvnia-minus'       => 'Cur-Hryvnia-Minus' ),
        array( 'icofont icofont-cur-hryvnia-plus'       => 'Cur-Hryvnia-Plus' ),
        array( 'icofont icofont-cur-hryvnia-true'       => 'Cur-Hryvnia-True' ),
        array( 'icofont icofont-cur-lira'       => 'Cur-Lira' ),
        array( 'icofont icofont-cur-lira-false'       => 'Cur-Lira-False' ),
        array( 'icofont icofont-cur-lira-minus'       => 'Cur-Lira-Minus' ),
        array( 'icofont icofont-cur-lira-plus'       => 'Cur-Lira-Plus' ),
        array( 'icofont icofont-cur-lira-true'       => 'Cur-Lira-True' ),
        array( 'icofont icofont-cur-peseta'       => 'Cur-Peseta' ),
        array( 'icofont icofont-cur-peseta-false'       => 'Cur-Peseta-False' ),
        array( 'icofont icofont-cur-peseta-minus'       => 'Cur-Peseta-Minus' ),
        array( 'icofont icofont-cur-peseta-plus'       => 'Cur-Peseta-Plus' ),
        array( 'icofont icofont-cur-peseta-true'       => 'Cur-Peseta-True' ),
        array( 'icofont icofont-cur-peso'       => 'Cur-Peso' ),
        array( 'icofont icofont-cur-peso-false'       => 'Cur-Peso-False' ),
        array( 'icofont icofont-cur-peso-minus'       => 'Cur-Peso-Minus' ),
        array( 'icofont icofont-cur-peso-plus'       => 'Cur-Peso-Plus' ),
        array( 'icofont icofont-cur-peso-true'       => 'Cur-Peso-True' ),
        array( 'icofont icofont-cur-pound'       => 'Cur-Pound' ),
        array( 'icofont icofont-cur-pound-false'       => 'Cur-Pound-False' ),
        array( 'icofont icofont-cur-pound-minus'       => 'Cur-Pound-Minus' ),
        array( 'icofont icofont-cur-pound-plus'       => 'Cur-Pound-Plus' ),
        array( 'icofont icofont-cur-pound-true'       => 'Cur-Pound-True' ),
        array( 'icofont icofont-cur-renminbi'       => 'Cur-Renminbi' ),
        array( 'icofont icofont-cur-renminbi-false'       => 'Cur-Renminbi-False' ),
        array( 'icofont icofont-cur-renminbi-minus'       => 'Cur-Renminbi-Minus' ),
        array( 'icofont icofont-cur-renminbi-plus'       => 'Cur-Renminbi-Plus' ),
        array( 'icofont icofont-cur-renminbi-true'       => 'Cur-Renminbi-True' ),
        array( 'icofont icofont-cur-riyal'       => 'Cur-Riyal' ),
        array( 'icofont icofont-cur-riyal-false'       => 'Cur-Riyal-False' ),
        array( 'icofont icofont-cur-riyal-minus'       => 'Cur-Riyal-Minus' ),
        array( 'icofont icofont-cur-riyal-plus'       => 'Cur-Riyal-Plus' ),
        array( 'icofont icofont-cur-riyal-true'       => 'Cur-Riyal-True' ),
        array( 'icofont icofont-cur-rouble'       => 'Cur-Rouble' ),
        array( 'icofont icofont-cur-rouble-false'       => 'Cur-Rouble-False' ),
        array( 'icofont icofont-cur-rouble-minus'       => 'Cur-Rouble-Minus' ),
        array( 'icofont icofont-cur-rouble-plus'       => 'Cur-Rouble-Plus' ),
        array( 'icofont icofont-cur-rouble-true'       => 'Cur-Rouble-True' ),
        array( 'icofont icofont-cur-rupee'       => 'Cur-Rupee' ),
        array( 'icofont icofont-cur-rupee-false'       => 'Cur-Rupee-False' ),
        array( 'icofont icofont-cur-rupee-minus'       => 'Cur-Rupee-Minus' ),
        array( 'icofont icofont-cur-rupee-plus'       => 'Cur-Rupee-Plus' ),
        array( 'icofont icofont-cur-rupee-true'       => 'Cur-Rupee-True' ),
        array( 'icofont icofont-cur-taka'       => 'Cur-Taka' ),
        array( 'icofont icofont-cur-taka-false'       => 'Cur-Taka-False' ),
        array( 'icofont icofont-cur-taka-minus'       => 'Cur-Taka-Minus' ),
        array( 'icofont icofont-cur-taka-plus'       => 'Cur-Taka-Plus' ),
        array( 'icofont icofont-cur-taka-true'       => 'Cur-Taka-True' ),
        array( 'icofont icofont-cur-turkish-lira'       => 'Cur-Turkish-Lira' ),
        array( 'icofont icofont-cur-turkish-lira-false'       => 'Cur-Turkish-Lira-False' ),
        array( 'icofont icofont-cur-turkish-lira-minus'       => 'Cur-Turkish-Lira-Minus' ),
        array( 'icofont icofont-cur-turkish-lira-plus'       => 'Cur-Turkish-Lira-Plus' ),
        array( 'icofont icofont-cur-turkish-lira-true'       => 'Cur-Turkish-Lira-True' ),
        array( 'icofont icofont-cur-won'       => 'Cur-Won' ),
        array( 'icofont icofont-cur-won-false'       => 'Cur-Won-False' ),
        array( 'icofont icofont-cur-won-minus'       => 'Cur-Won-Minus' ),
        array( 'icofont icofont-cur-won-plus'       => 'Cur-Won-Plus' ),
        array( 'icofont icofont-cur-won-true'       => 'Cur-Won-True' ),
        array( 'icofont icofont-cur-yen'       => 'Cur-Yen' ),
        array( 'icofont icofont-cur-yen-false'       => 'Cur-Yen-False' ),
        array( 'icofont icofont-cur-yen-minus'       => 'Cur-Yen-Minus' ),
        array( 'icofont icofont-cur-yen-plus'       => 'Cur-Yen-Plus' ),
        array( 'icofont icofont-cur-yen-true'       => 'Cur-Yen-True' ),
        array( 'icofont icofont-android-nexus'       => 'Android-Nexus' ),
        array( 'icofont icofont-android-tablet'       => 'Android-Tablet' ),
        array( 'icofont icofont-apple-watch'       => 'Apple-Watch' ),
        array( 'icofont icofont-drwaing-tablet'       => 'Drwaing-Tablet' ),
        array( 'icofont icofont-earphone'       => 'Earphone' ),
        array( 'icofont icofont-flash-drive'       => 'Flash-Drive' ),
        array( 'icofont icofont-game-control'       => 'Game-Control' ),
        array( 'icofont icofont-headphone-alt'       => 'Headphone-Alt' ),
        array( 'icofont icofont-htc-one'       => 'HTC-One' ),
        array( 'icofont icofont-imac'       => 'iMac' ),
        array( 'icofont icofont-ipad-touch'       => 'iPad-Touch' ),
        array( 'icofont icofont-iphone'       => 'iPhone' ),
        array( 'icofont icofont-ipod-nano'       => 'iPod-Nano' ),
        array( 'icofont icofont-ipod-touch'       => 'iPod-Touch' ),
        array( 'icofont icofont-keyboard-alt'       => 'Keyboard-Alt' ),
        array( 'icofont icofont-keyboard-wireless'       => 'Keyboard-Wireless' ),
        array( 'icofont icofont-laptop-alt'       => 'Laptop-Alt' ),
        array( 'icofont icofont-macbook'       => 'Macbook' ),
        array( 'icofont icofont-magic-mouse'       => 'Magic-Mouse' ),
        array( 'icofont icofont-microphone-alt'       => 'Microphone-Alt' ),
        array( 'icofont icofont-monitor'       => 'Monitor' ),
        array( 'icofont icofont-mouse'       => 'Mouse' ),
        array( 'icofont icofont-nintendo'       => 'Nintendo' ),
        array( 'icofont icofont-playstation'       => 'Playstation' ),
        array( 'icofont icofont-psvita'       => 'Psvita' ),
        array( 'icofont icofont-radio-mic'       => 'Radio-Mic' ),
        array( 'icofont icofont-refrigerator'       => 'Refrigerator' ),
        array( 'icofont icofont-samsung-galaxy'       => 'Samsung-Galaxy' ),
        array( 'icofont icofont-surface-tablet'       => 'Surface-Tablet' ),
        array( 'icofont icofont-washing-machine'       => 'Washing-Machine' ),
        array( 'icofont icofont-wifi-router'       => 'WiFi-Router' ),
        array( 'icofont icofont-wii-u'       => 'Wii-U' ),
        array( 'icofont icofont-windows-lumia'       => 'Windows-Lumia' ),
        array( 'icofont icofont-wireless-mouse'       => 'Wireless-Mouse' ),
        array( 'icofont icofont-xbox-360'       => 'Xbox-360' ),
        array( 'icofont icofont-arrow-down'       => 'Arrow-Down' ),
        array( 'icofont icofont-arrow-left'       => 'Arrow-Left' ),
        array( 'icofont icofont-arrow-right'       => 'Arrow-Right' ),
        array( 'icofont icofont-arrow-up'       => 'Arrow-Up' ),
        array( 'icofont icofont-block-down'       => 'Block-Down' ),
        array( 'icofont icofont-block-left'       => 'Block-Left' ),
        array( 'icofont icofont-block-right'       => 'Block-Right' ),
        array( 'icofont icofont-block-up'       => 'Block-Up' ),
        array( 'icofont icofont-bubble-down'       => 'Bubble-Down' ),
        array( 'icofont icofont-bubble-left'       => 'Bubble-Left' ),
        array( 'icofont icofont-bubble-right'       => 'Bubble-Right' ),
        array( 'icofont icofont-bubble-up'       => 'Bubble-Up' ),
        array( 'icofont icofont-caret-down'       => 'Caret-Down' ),
        array( 'icofont icofont-caret-left'       => 'Caret-Left' ),
        array( 'icofont icofont-caret-right'       => 'Caret-Right' ),
        array( 'icofont icofont-caret-up'       => 'Caret-Up' ),
        array( 'icofont icofont-circled-down'       => 'Circled-Down' ),
        array( 'icofont icofont-circled-left'       => 'Circled-Left' ),
        array( 'icofont icofont-circled-right'       => 'Circled-Right' ),
        array( 'icofont icofont-circled-up'       => 'Circled-Up' ),
        array( 'icofont icofont-collapse'       => 'Collapse' ),
        array( 'icofont icofont-cursor-drag'       => 'Cursor-Drag' ),
        array( 'icofont icofont-curved-double-left'       => 'Curved-Double-Left' ),
        array( 'icofont icofont-curved-double-right'       => 'Curved-Double-Right' ),
        array( 'icofont icofont-curved-down'       => 'Curved-Down' ),
        array( 'icofont icofont-curved-left'       => 'Curved-Left' ),
        array( 'icofont icofont-curved-right'       => 'Curved-Right' ),
        array( 'icofont icofont-curved-up'       => 'Curved-Up' ),
        array( 'icofont icofont-dotted-down'       => 'Dotted-Down' ),
        array( 'icofont icofont-dotted-left'       => 'Dotted-Left' ),
        array( 'icofont icofont-dotted-right'       => 'Dotted-Right' ),
        array( 'icofont icofont-dotted-up'       => 'Dotted-Up' ),
        array( 'icofont icofont-double-left'       => 'Double-Left' ),
        array( 'icofont icofont-double-right'       => 'Double-Right' ),
        array( 'icofont icofont-drag'       => 'Drag' ),
        array( 'icofont icofont-drag1'       => 'Drag1' ),
        array( 'icofont icofont-drag2'       => 'Drag2' ),
        array( 'icofont icofont-drag3'       => 'Drag3' ),
        array( 'icofont icofont-expand-alt'       => 'Expand-Alt' ),
        array( 'icofont icofont-hand-down'       => 'Hand-Down' ),
        array( 'icofont icofont-hand-drag'       => 'Hand-Drag' ),
        array( 'icofont icofont-hand-drag1'       => 'Hand-Drag1' ),
        array( 'icofont icofont-hand-drag2'       => 'Hand-Drag2' ),
        array( 'icofont icofont-hand-drawn-alt-down'       => 'Hand-Drawn-Alt-Down' ),
        array( 'icofont icofont-hand-drawn-alt-left'       => 'Hand-Drawn-Alt-Left' ),
        array( 'icofont icofont-hand-drawn-alt-right'       => 'Hand-Drawn-Alt-Right' ),
        array( 'icofont icofont-hand-drawn-alt-up'       => 'Hand-Drawn-Alt-Up' ),
        array( 'icofont icofont-hand-drawn-down'       => 'Hand-Drawn-Down' ),
        array( 'icofont icofont-hand-drawn-left'       => 'Hand-Drawn-Left' ),
        array( 'icofont icofont-hand-drawn-right'       => 'Hand-Drawn-Right' ),
        array( 'icofont icofont-hand-drawn-up'       => 'Hand-Drawn-Up' ),
        array( 'icofont icofont-hand-left'       => 'Hand-Left' ),
        array( 'icofont icofont-hand-right'       => 'Hand-Right' ),
        array( 'icofont icofont-hand-up'       => 'Hand-Up' ),
        array( 'icofont icofont-line-block-down'       => 'Line-Block-Down' ),
        array( 'icofont icofont-line-block-left'       => 'Line-Block-Left' ),
        array( 'icofont icofont-line-block-right'       => 'Line-Block-Right' ),
        array( 'icofont icofont-line-block-up'       => 'Line-Block-Up' ),
        array( 'icofont icofont-long-arrow-down'       => 'Long-Arrow-Down' ),
        array( 'icofont icofont-long-arrow-left'       => 'Long-Arrow-Left' ),
        array( 'icofont icofont-long-arrow-right'       => 'Long-Arrow-Right' ),
        array( 'icofont icofont-long-arrow-up'       => 'Long-Arrow-Up' ),
        array( 'icofont icofont-rounded-collapse'       => 'Rounded-Collapse' ),
        array( 'icofont icofont-rounded-double-left'       => 'Rounded-Double-Left' ),
        array( 'icofont icofont-rounded-double-right'       => 'Rounded-Double-Right' ),
        array( 'icofont icofont-rounded-down'       => 'Rounded-Down' ),
        array( 'icofont icofont-rounded-expand'       => 'Rounded-Expand' ),
        array( 'icofont icofont-rounded-left'       => 'Rounded-Left' ),
        array( 'icofont icofont-rounded-left-down'       => 'Rounded-Left-Down' ),
        array( 'icofont icofont-rounded-left-up'       => 'Rounded-Left-Up' ),
        array( 'icofont icofont-rounded-right'       => 'Rounded-Right' ),
        array( 'icofont icofont-rounded-right-down'       => 'Rounded-Right-Down' ),
        array( 'icofont icofont-rounded-right-up'       => 'Rounded-Right-Up' ),
        array( 'icofont icofont-rounded-up'       => 'Rounded-Up' ),
        array( 'icofont icofont-scroll-bubble-down'       => 'Scroll-Bubble-Down' ),
        array( 'icofont icofont-scroll-bubble-left'       => 'Scroll-Bubble-Left' ),
        array( 'icofont icofont-scroll-bubble-right'       => 'Scroll-Bubble-Right' ),
        array( 'icofont icofont-scroll-bubble-up'       => 'Scroll-Bubble-Up' ),
        array( 'icofont icofont-scroll-double-down'       => 'Scroll-Double-Down' ),
        array( 'icofont icofont-scroll-double-left'       => 'Scroll-Double-Left' ),
        array( 'icofont icofont-scroll-double-right'       => 'Scroll-Double-Right' ),
        array( 'icofont icofont-scroll-double-up'       => 'Scroll-Double-Up' ),
        array( 'icofont icofont-scroll-down'       => 'Scroll-Down' ),
        array( 'icofont icofont-scroll-left'       => 'Scroll-Left' ),
        array( 'icofont icofont-scroll-long-down'       => 'Scroll-Long-Down' ),
        array( 'icofont icofont-scroll-long-left'       => 'Scroll-Long-Left' ),
        array( 'icofont icofont-scroll-long-right'       => 'Scroll-Long-Right' ),
        array( 'icofont icofont-scroll-long-up'       => 'Scroll-Long-Up' ),
        array( 'icofont icofont-scroll-right'       => 'Scroll-Right' ),
        array( 'icofont icofont-scroll-up'       => 'Scroll-Up' ),
        array( 'icofont icofont-simple-down'       => 'Simple-Down' ),
        array( 'icofont icofont-simple-left'       => 'Simple-Left' ),
        array( 'icofont icofont-simple-left-down'       => 'Simple-Left-Down' ),
        array( 'icofont icofont-simple-left-up'       => 'Simple-Left-Up' ),
        array( 'icofont icofont-simple-right'       => 'Simple-Right' ),
        array( 'icofont icofont-simple-right-down'       => 'Simple-Right-Down' ),
        array( 'icofont icofont-simple-right-up'       => 'Simple-Right-Up' ),
        array( 'icofont icofont-simple-up'       => 'Simple-Up' ),
        array( 'icofont icofont-square-down'       => 'Square-Down' ),
        array( 'icofont icofont-square-left'       => 'Square-Left' ),
        array( 'icofont icofont-square-right'       => 'Square-Right' ),
        array( 'icofont icofont-square-up'       => 'Square-Up' ),
        array( 'icofont icofont-stylish-down'       => 'Stylish-Down' ),
        array( 'icofont icofont-stylish-left'       => 'Stylish-Left' ),
        array( 'icofont icofont-stylish-right'       => 'Stylish-Right' ),
        array( 'icofont icofont-stylish-up'       => 'Stylish-Up' ),
        array( 'icofont icofont-swoosh-down'       => 'Swoosh-Down' ),
        array( 'icofont icofont-swoosh-left'       => 'Swoosh-Left' ),
        array( 'icofont icofont-swoosh-right'       => 'Swoosh-Right' ),
        array( 'icofont icofont-swoosh-up'       => 'Swoosh-Up' ),
        array( 'icofont icofont-thin-double-left'       => 'Thin-Double-Left' ),
        array( 'icofont icofont-thin-double-right'       => 'Thin-Double-Right' ),
        array( 'icofont icofont-thin-down'       => 'Thin-Down' ),
        array( 'icofont icofont-thin-left'       => 'Thin-Left' ),
        array( 'icofont icofont-thin-right'       => 'Thin-Right' ),
        array( 'icofont icofont-thin-uparray'       => 'Thin-Uparray' ),
        array( 'icofont icofont-award'       => 'Award' ),
        array( 'icofont icofont-bell-alt'       => 'Bell-Alt' ),
        array( 'icofont icofont-book-alt'       => 'Book-Alt' ),
        array( 'icofont icofont-brainstorming'       => 'Brainstorming' ),
        array( 'icofont icofont-certificate-alt-1'       => 'Certificate-Alt-1' ),
        array( 'icofont icofont-certificate-alt-2'       => 'Certificate-Alt-2' ),
        array( 'icofont icofont-dna-alt-2'       => 'Dna-Alt-2' ),
        array( 'icofont icofont-education'       => 'Education' ),
        array( 'icofont icofont-electron'       => 'Electron' ),
        array( 'icofont icofont-fountain-pen'       => 'Fountain-Pen' ),
        array( 'icofont icofont-globe-alt'       => 'Globe-Alt' ),
        array( 'icofont icofont-graduate-alt'       => 'Graduate-Alt' ),
        array( 'icofont icofont-group-students'       => 'Group-Students' ),
        array( 'icofont icofont-hat'       => 'Hat' ),
        array( 'icofont icofont-hat-alt'       => 'Hat-Alt' ),
        array( 'icofont icofont-instrument'       => 'Instrument' ),
        array( 'icofont icofont-lamp-light'       => 'Lamp-Light' ),
        array( 'icofont icofont-microscope-alt'       => 'Microscope-Alt' ),
        array( 'icofont icofont-paper'       => 'Paper' ),
        array( 'icofont icofont-pen-alt-4'       => 'Pen-Alt-4' ),
        array( 'icofont icofont-pen-nib'       => 'Pen-Nib' ),
        array( 'icofont icofont-pencil-alt-5'       => 'Pencil-Alt-5' ),
        array( 'icofont icofont-quill-pen'       => 'Quill-Pen' ),
        array( 'icofont icofont-read-book'       => 'Read-Book' ),
        array( 'icofont icofont-read-book-alt'       => 'Read-Book-Alt' ),
        array( 'icofont icofont-school-bag'       => 'School-Bag' ),
        array( 'icofont icofont-school-bus'       => 'School-Bus' ),
        array( 'icofont icofont-student'       => 'Student' ),
        array( 'icofont icofont-student-alt'       => 'Student-Alt' ),
        array( 'icofont icofont-teacher'       => 'Teacher' ),
        array( 'icofont icofont-test-bulb'       => 'Test-Bulb' ),
        array( 'icofont icofont-test-tube-alt'       => 'Test-Tube-Alt' ),
        array( 'icofont icofont-university'       => 'University' ),
        array( 'icofont icofont-emo-angry'       => 'Emo-Angry' ),
        array( 'icofont icofont-emo-astonished'       => 'Emo-Astonished' ),
        array( 'icofont icofont-emo-confounded'       => 'Emo-Confounded' ),
        array( 'icofont icofont-emo-confused'       => 'Emo-Confused' ),
        array( 'icofont icofont-emo-crying'       => 'Emo-Crying' ),
        array( 'icofont icofont-emo-dizzy'       => 'Emo-Dizzy' ),
        array( 'icofont icofont-emo-expressionless'       => 'Emo-Expressionless' ),
        array( 'icofont icofont-emo-heart-eyes'       => 'Emo-Heart-Eyes' ),
        array( 'icofont icofont-emo-laughing'       => 'Emo-Laughing' ),
        array( 'icofont icofont-emo-nerd-smile'       => 'Emo-Nerd-Smile' ),
        array( 'icofont icofont-emo-open-mouth'       => 'Emo-Open-Mouth' ),
        array( 'icofont icofont-emo-rage'       => 'Emo-Rage' ),
        array( 'icofont icofont-emo-rolling-eyes'       => 'Emo-Rolling-Eyes' ),
        array( 'icofont icofont-emo-sad'       => 'Emo-Sad' ),
        array( 'icofont icofont-emo-simple-smile'       => 'Emo-Simple-Smile' ),
        array( 'icofont icofont-emo-slightly-smile'       => 'Emo-Slightly-Smile' ),
        array( 'icofont icofont-emo-smirk'       => 'Emo-Smirk' ),
        array( 'icofont icofont-emo-stuck-out-tongue'       => 'Emo-Stuck-Out-Tongue' ),
        array( 'icofont icofont-emo-wink-smile'       => 'Emo-Wink-Smile' ),
        array( 'icofont icofont-emo-worried'       => 'Emo-Worried' ),
        array( 'icofont icofont-file-audio'       => 'File-Audio' ),
        array( 'icofont icofont-file-avi-mp4'       => 'File-AVI-MP4' ),
        array( 'icofont icofont-file-bmp'       => 'File-BMP' ),
        array( 'icofont icofont-file-code'       => 'File-Code' ),
        array( 'icofont icofont-file-css'       => 'File-CSS' ),
        array( 'icofont icofont-file-document'       => 'File-Document' ),
        array( 'icofont icofont-file-eps'       => 'File-Eps' ),
        array( 'icofont icofont-file-excel'       => 'File-Excel' ),
        array( 'icofont icofont-file-exe'       => 'File-Exe' ),
        array( 'icofont icofont-file-file'       => 'File-File' ),
        array( 'icofont icofont-file-flv'       => 'File-FLV' ),
        array( 'icofont icofont-file-gif'       => 'File-GIF' ),
        array( 'icofont icofont-file-html5'       => 'File-Html5' ),
        array( 'icofont icofont-file-image'       => 'File-Image' ),
        array( 'icofont icofont-file-iso'       => 'File-ISO' ),
        array( 'icofont icofont-file-java'       => 'File-Java' ),
        array( 'icofont icofont-file-javascript'       => 'File-Javascript' ),
        array( 'icofont icofont-file-jpg'       => 'File-JPG' ),
        array( 'icofont icofont-file-midi'       => 'File-MIDI' ),
        array( 'icofont icofont-file-mov'       => 'File-MOV' ),
        array( 'icofont icofont-file-mp3'       => 'File-MP3' ),
        array( 'icofont icofont-file-pdf'       => 'File-PDF' ),
        array( 'icofont icofont-file-php'       => 'File-PHP' ),
        array( 'icofont icofont-file-png'       => 'File-PNG' ),
        array( 'icofont icofont-file-powerpoint'       => 'File-Powerpoint' ),
        array( 'icofont icofont-file-presentation'       => 'File-Presentation' ),
        array( 'icofont icofont-file-psb'       => 'File-PSB' ),
        array( 'icofont icofont-file-psd'       => 'File-PSD' ),
        array( 'icofont icofont-file-python'       => 'File-Python' ),
        array( 'icofont icofont-file-ruby'       => 'File-Ruby' ),
        array( 'icofont icofont-file-spreadsheet'       => 'File-Spreadsheet' ),
        array( 'icofont icofont-file-sql'       => 'File-SQL' ),
        array( 'icofont icofont-file-svg'       => 'File-SVG' ),
        array( 'icofont icofont-file-text'       => 'File-Text' ),
        array( 'icofont icofont-file-tiff'       => 'File-TIFF' ),
        array( 'icofont icofont-file-video'       => 'File-Video' ),
        array( 'icofont icofont-file-wave'       => 'File-Wave' ),
        array( 'icofont icofont-file-wmv'       => 'File-WMV' ),
        array( 'icofont icofont-file-word'       => 'File-Word' ),
        array( 'icofont icofont-file-zip'       => 'File-Zip' ),
        array( 'icofont icofont-apple'       => 'Apple' ),
        array( 'icofont icofont-arabian-coffee'       => 'Arabian-Coffee' ),
        array( 'icofont icofont-artichoke'       => 'Artichoke' ),
        array( 'icofont icofont-asparagus'       => 'Asparagus' ),
        array( 'icofont icofont-avocado'       => 'Avocado' ),
        array( 'icofont icofont-baby-food'       => 'Baby-Food' ),
        array( 'icofont icofont-banana'       => 'Banana' ),
        array( 'icofont icofont-bbq'       => 'Bbq' ),
        array( 'icofont icofont-beans'       => 'Beans' ),
        array( 'icofont icofont-beer'       => 'Beer' ),
        array( 'icofont icofont-bell-pepper-capsicum'       => 'Bell-Pepper-Capsicum' ),
        array( 'icofont icofont-birthday-cake'       => 'Birthday-Cake' ),
        array( 'icofont icofont-bread'       => 'Bread' ),
        array( 'icofont icofont-broccoli'       => 'Broccoli' ),
        array( 'icofont icofont-burger'       => 'Burger' ),
        array( 'icofont icofont-cabbage'       => 'Cabbage' ),
        array( 'icofont icofont-carrot'       => 'Carrot' ),
        array( 'icofont icofont-cauli-flower'       => 'Cauli-Flower' ),
        array( 'icofont icofont-cheese'       => 'Cheese' ),
        array( 'icofont icofont-chef'       => 'Chef' ),
        array( 'icofont icofont-cherry'       => 'Cherry' ),
        array( 'icofont icofont-chicken'       => 'Chicken' ),
        array( 'icofont icofont-chicken-fry'       => 'Chicken-Fry' ),
        array( 'icofont icofont-cocktail'       => 'Cocktail' ),
        array( 'icofont icofont-coconut'       => 'Coconut' ),
        array( 'icofont icofont-coffee-alt'       => 'Coffee-Alt' ),
        array( 'icofont icofont-coffee-mug'       => 'Coffee-Mug' ),
        array( 'icofont icofont-coffee-pot'       => 'Coffee-Pot' ),
        array( 'icofont icofont-cola'       => 'Cola' ),
        array( 'icofont icofont-corn'       => 'Corn' ),
        array( 'icofont icofont-croissant'       => 'Croissant' ),
        array( 'icofont icofont-crop-plant'       => 'Crop-Plant' ),
        array( 'icofont icofont-cucumber'       => 'Cucumber' ),
        array( 'icofont icofont-cup-cake'       => 'Cup-Cake' ),
        array( 'icofont icofont-dining-table'       => 'Dining-Table' ),
        array( 'icofont icofont-donut'       => 'Donut' ),
        array( 'icofont icofont-egg-plant'       => 'Egg-Plant' ),
        array( 'icofont icofont-egg-poached'       => 'Egg-Poached' ),
        array( 'icofont icofont-farmer'       => 'Farmer' ),
        array( 'icofont icofont-farmer1'       => 'Farmer1' ),
        array( 'icofont icofont-fast-food'       => 'Fast-Food' ),
        array( 'icofont icofont-fish'       => 'Fish' ),
        array( 'icofont icofont-food-basket'       => 'Food-Basket' ),
        array( 'icofont icofont-food-cart'       => 'Food-Cart' ),
        array( 'icofont icofont-fork-and-knife'       => 'Fork-And-Knife' ),
        array( 'icofont icofont-french-fries'       => 'French-Fries' ),
        array( 'icofont icofont-fresh-juice'       => 'Fresh-Juice' ),
        array( 'icofont icofont-fruits'       => 'Fruits' ),
        array( 'icofont icofont-grapes'       => 'Grapes' ),
        array( 'icofont icofont-honey'       => 'Honey' ),
        array( 'icofont icofont-hot-dog'       => 'Hot-Dog' ),
        array( 'icofont icofont-hotel-alt'       => 'Hotel-Alt' ),
        array( 'icofont icofont-ice-cream'       => 'Ice-Cream' ),
        array( 'icofont icofont-ice-cream-alt'       => 'Ice-Cream-Alt' ),
        array( 'icofont icofont-ketchup'       => 'Ketchup' ),
        array( 'icofont icofont-kiwi'       => 'Kiwi' ),
        array( 'icofont icofont-layered-cake'       => 'Layered-Cake' ),
        array( 'icofont icofont-lemon-alt'       => 'Lemon-Alt' ),
        array( 'icofont icofont-lobster'       => 'Lobster' ),
        array( 'icofont icofont-mango'       => 'Mango' ),
        array( 'icofont icofont-milk'       => 'Milk' ),
        array( 'icofont icofont-mushroom'       => 'Mushroom' ),
        array( 'icofont icofont-noodles'       => 'Noodles' ),
        array( 'icofont icofont-onion'       => 'Onion' ),
        array( 'icofont icofont-orange'       => 'Orange' ),
        array( 'icofont icofont-pear'       => 'Pear' ),
        array( 'icofont icofont-peas'       => 'Peas' ),
        array( 'icofont icofont-pepper'       => 'Pepper' ),
        array( 'icofont icofont-pie-alt'       => 'Pie-Alt' ),
        array( 'icofont icofont-pineapple'       => 'Pineapple' ),
        array( 'icofont icofont-pizza'       => 'Pizza' ),
        array( 'icofont icofont-pizza-slice'       => 'Pizza-Slice' ),
        array( 'icofont icofont-plant'       => 'Plant' ),
        array( 'icofont icofont-popcorn'       => 'Popcorn' ),
        array( 'icofont icofont-potato'       => 'Potato' ),
        array( 'icofont icofont-pumpkin'       => 'Pumpkin' ),
        array( 'icofont icofont-raddish'       => 'Raddish' ),
        array( 'icofont icofont-restaurant'       => 'Restaurant' ),
        array( 'icofont icofont-restaurant-menu'       => 'Restaurant-Menu' ),
        array( 'icofont icofont-salt-and-pepper'       => 'Salt-And-Pepper' ),
        array( 'icofont icofont-sandwich'       => 'Sandwich' ),
        array( 'icofont icofont-sausage'       => 'Sausage' ),
        array( 'icofont icofont-shrimp'       => 'Shrimp' ),
        array( 'icofont icofont-sof-drinks'       => 'Sof-Drinks' ),
        array( 'icofont icofont-soup-bowl'       => 'Soup-Bowl' ),
        array( 'icofont icofont-spoon-and-fork'       => 'Spoon-Snd-Fork' ),
        array( 'icofont icofont-steak'       => 'Steak' ),
        array( 'icofont icofont-strawberry'       => 'Strawberry' ),
        array( 'icofont icofont-sub-sandwich'       => 'Sub-Sandwich' ),
        array( 'icofont icofont-sushi'       => 'Sushi' ),
        array( 'icofont icofont-taco'       => 'Taco' ),
        array( 'icofont icofont-tea'       => 'Tea' ),
        array( 'icofont icofont-tea-pot'       => 'Tea-Pot' ),
        array( 'icofont icofont-tomato'       => 'Tomato' ),
        array( 'icofont icofont-waiter-alt'       => 'Waiter-Alt' ),
        array( 'icofont icofont-watermelon'       => 'Watermelon' ),
        array( 'icofont icofont-wheat'       => 'Wheat' ),
        array( 'icofont icofont-abc'       => 'Abc' ),
        array( 'icofont icofont-baby-cloth'       => 'Baby-Cloth' ),
        array( 'icofont icofont-baby-milk-bottle'       => 'Baby-Milk-Bottle' ),
        array( 'icofont icofont-baby-trolley'       => 'Baby-Trolley' ),
        array( 'icofont icofont-back-pack'       => 'Back-Pack' ),
        array( 'icofont icofont-candy'       => 'Candy' ),
        array( 'icofont icofont-cycling'       => 'Cycling' ),
        array( 'icofont icofont-holding-hands'       => 'Holding-Hands' ),
        array( 'icofont icofont-infant-nipple'       => 'Infant-Nipple' ),
        array( 'icofont icofont-kids-scooter'       => 'Kids-Scooter' ),
        array( 'icofont icofont-safety-pin'       => 'Safety-Pin' ),
        array( 'icofont icofont-teddy-bear'       => 'Teddy-Bear' ),
        array( 'icofont icofont-toy-ball'       => 'Toy-Ball' ),
        array( 'icofont icofont-toy-cat'       => 'Toy-Cat' ),
        array( 'icofont icofont-toy-duck'       => 'Toy-Duck' ),
        array( 'icofont icofont-toy-elephant'       => 'Toy-Elephant' ),
        array( 'icofont icofont-toy-hand'       => 'Toy-Hand' ),
        array( 'icofont icofont-toy-horse'       => 'Toy-Horse' ),
        array( 'icofont icofont-toy-lattu'       => 'Toy-Lattu' ),
        array( 'icofont icofont-toy-train'       => 'Toy-Train' ),
        array( 'icofont icofont-unique-idea'       => 'Unique-Idea' ),
        array( 'icofont icofont-bag-alt'       => 'Bag-Alt' ),
        array( 'icofont icofont-burglar'       => 'Burglar' ),
        array( 'icofont icofont-cannon-firing'       => 'Cannon-Firing' ),
        array( 'icofont icofont-cc-camera'       => 'Cc-Camera' ),
        array( 'icofont icofont-cop'       => 'Cop' ),
        array( 'icofont icofont-cop-badge'       => 'Cop-Badge' ),
        array( 'icofont icofont-court'       => 'Court' ),
        array( 'icofont icofont-court-hammer'       => 'Court-Hammer' ),
        array( 'icofont icofont-finger-print'       => 'Finger-Print' ),
        array( 'icofont icofont-handcuff'       => 'Handcuff' ),
        array( 'icofont icofont-handcuff-alt'       => 'Handcuff-Alt' ),
        array( 'icofont icofont-investigation'       => 'Investigation' ),
        array( 'icofont icofont-investigator'       => 'Investigator' ),
        array( 'icofont icofont-jail'       => 'Jail' ),
        array( 'icofont icofont-judge'       => 'Judge' ),
        array( 'icofont icofont-law'       => 'Law' ),
        array( 'icofont icofont-law-alt-1'       => 'Law-Alt-1' ),
        array( 'icofont icofont-law-alt-2'       => 'Law-Alt-2' ),
        array( 'icofont icofont-law-alt-3'       => 'Law-Alt-3' ),
        array( 'icofont icofont-law-book'       => 'Law-Book' ),
        array( 'icofont icofont-law-document'       => 'Law-Document' ),
        array( 'icofont icofont-lawyer'       => 'Lawyer' ),
        array( 'icofont icofont-lawyer-alt-1'       => 'Lawyer-Alt-1' ),
        array( 'icofont icofont-lawyer-alt-2'       => 'Lawyer-Alt-2' ),
        array( 'icofont icofont-order'       => 'Order' ),
        array( 'icofont icofont-pistol'       => 'Pistol' ),
        array( 'icofont icofont-police'       => 'Police' ),
        array( 'icofont icofont-police-badge'       => 'Police-Badge' ),
        array( 'icofont icofont-police-cap'       => 'Police-Cap' ),
        array( 'icofont icofont-police-car-alt-1'       => 'Police-Car-Alt-1' ),
        array( 'icofont icofont-police-car-alt-2'       => 'Police-Car-Alt-2' ),
        array( 'icofont icofont-police-hat'       => 'Police-Hat' ),
        array( 'icofont icofont-police-van'       => 'Police-Van' ),
        array( 'icofont icofont-protect'       => 'Protect' ),
        array( 'icofont icofont-scales'       => 'Scales' ),
        array( 'icofont icofont-thief'       => 'Thief' ),
        array( 'icofont icofont-thief-alt'       => 'Thief-Alt' ),
        array( 'icofont icofont-abacus'       => 'Abacus' ),
        array( 'icofont icofont-abacus-alt'       => 'Abacus-Alt' ),
        array( 'icofont icofont-angle'       => 'Angle' ),
        array( 'icofont icofont-calculator-alt-1'       => 'Calculator-Alt-1' ),
        array( 'icofont icofont-calculator-alt-2'       => 'Calculator-Alt-2' ),
        array( 'icofont icofont-circle-ruler'       => 'Circle-Ruler' ),
        array( 'icofont icofont-circle-ruler-alt'       => 'Circle-Ruler-Alt' ),
        array( 'icofont icofont-compass-alt-1'       => 'Compass-alt-1' ),
        array( 'icofont icofont-compass-alt-2'       => 'Compass-alt-2' ),
        array( 'icofont icofont-compass-alt-3'       => 'Compass-alt-3' ),
        array( 'icofont icofont-compass-alt-4'       => 'Compass-alt-4' ),
        array( 'icofont icofont-degrees'       => 'Degrees' ),
        array( 'icofont icofont-degrees-alt-1'       => 'Degrees-Alt-1' ),
        array( 'icofont icofont-degrees-alt-2'       => 'Degrees-Alt-2' ),
        array( 'icofont icofont-golden-ratio'       => 'Golden-Ratio' ),
        array( 'icofont icofont-marker-alt-1'       => 'Marker-Alt-1' ),
        array( 'icofont icofont-marker-alt-2'       => 'Marker-Alt-2' ),
        array( 'icofont icofont-marker-alt-3'       => 'Marker-Alt-3' ),
        array( 'icofont icofont-mathematical'       => 'Mathematical' ),
        array( 'icofont icofont-mathematical-alt-1'       => 'Mathematical-Alt-1' ),
        array( 'icofont icofont-mathematical-alt-2'       => 'Mathematical-Alt-2' ),
        array( 'icofont icofont-pen-alt-1'       => 'Pen-Alt-1' ),
        array( 'icofont icofont-pen-alt-2'       => 'Pen-Alt-2' ),
        array( 'icofont icofont-pen-alt-3'       => 'Pen-Alt-3' ),
        array( 'icofont icofont-pen-holder'       => 'Pen-Holder' ),
        array( 'icofont icofont-pen-holder-alt-1'       => 'Pen-Holder-Alt-1' ),
        array( 'icofont icofont-pencil-alt-1'       => 'Pencil-Alt-1' ),
        array( 'icofont icofont-pencil-alt-2'       => 'Pencil-Alt-2' ),
        array( 'icofont icofont-pencil-alt-3'       => 'Pencil-Alt-3' ),
        array( 'icofont icofont-pencil-alt-4'       => 'Pencil-Alt-4' ),
        array( 'icofont icofont-ruler'       => 'Ruler' ),
        array( 'icofont icofont-ruler-alt-1'       => 'Ruler-Alt-1' ),
        array( 'icofont icofont-ruler-alt-2'       => 'Ruler-Alt-2' ),
        array( 'icofont icofont-ruler-compass'       => 'Ruler-Compass' ),
        array( 'icofont icofont-ruler-compass-alt'       => 'Ruler-Compass-Alt' ),
        array( 'icofont icofont-ruler-pencil'       => 'Ruler-Pencil' ),
        array( 'icofont icofont-ruler-pencil-alt-1'       => 'Ruler-Pencil-Alt-1' ),
        array( 'icofont icofont-ruler-pencil-alt-2'       => 'Ruler-Pencil-Alt-2' ),
        array( 'icofont icofont-rulers'       => 'Rulers' ),
        array( 'icofont icofont-rulers-alt'       => 'Rulers-Alt' ),
        array( 'icofont icofont-square-root'       => 'Square-Root' ),
        array( 'icofont icofont-aids'       => 'Aids' ),
        array( 'icofont icofont-ambulance'       => 'Ambulance' ),
        array( 'icofont icofont-autism'       => 'Autism' ),
        array( 'icofont icofont-bandage'       => 'Bandage' ),
        array( 'icofont icofont-bed-patient'       => 'Bed-Patient' ),
        array( 'icofont icofont-blind'       => 'Blind' ),
        array( 'icofont icofont-blood'       => 'Blood' ),
        array( 'icofont icofont-blood-drop'       => 'Blood-Drop' ),
        array( 'icofont icofont-blood-test'       => 'Blood-Test' ),
        array( 'icofont icofont-capsule'       => 'Capsule' ),
        array( 'icofont icofont-crutches'       => 'Crutches' ),
        array( 'icofont icofont-dna'       => 'Dna' ),
        array( 'icofont icofont-dna-alt-1'       => 'Dna-Alt-1' ),
        array( 'icofont icofont-doctor'       => 'Doctor' ),
        array( 'icofont icofont-doctor-alt'       => 'Doctor-Alt' ),
        array( 'icofont icofont-drug'       => 'Drug' ),
        array( 'icofont icofont-drug-pack'       => 'Drug-Pack' ),
        array( 'icofont icofont-eye-alt'       => 'Eye-Alt' ),
        array( 'icofont icofont-first-aid-alt'       => 'First-Aid-Alt' ),
        array( 'icofont icofont-garbage'       => 'Garbage' ),
        array( 'icofont icofont-heart-alt'       => 'Heart-Alt' ),
        array( 'icofont icofont-heartbeat'       => 'Heartbeat' ),
        array( 'icofont icofont-herbal'       => 'Herbal' ),
        array( 'icofont icofont-hospital'       => 'Hospital' ),
        array( 'icofont icofont-icu'       => 'Icu' ),
        array( 'icofont icofont-injection-syringe'       => 'Injection-Syringe' ),
        array( 'icofont icofont-laboratory'       => 'Laboratory' ),
        array( 'icofont icofont-medical-sign'       => 'Medical-Sign' ),
        array( 'icofont icofont-medical-sign-alt'       => 'Medical-Sign-Alt' ),
        array( 'icofont icofont-nurse'       => 'Nurse' ),
        array( 'icofont icofont-nurse-alt'       => 'Nurse-Alt' ),
        array( 'icofont icofont-nursing-home'       => 'Nursing-Home' ),
        array( 'icofont icofont-operation-theater'       => 'Operation-Theater' ),
        array( 'icofont icofont-paralysis-disability'       => 'Paralysis-Disability' ),
        array( 'icofont icofont-pills'       => 'Pills' ),
        array( 'icofont icofont-prescription'       => 'Prescription' ),
        array( 'icofont icofont-pulse'       => 'Pulse' ),
        array( 'icofont icofont-stethoscope'       => 'Stethoscope' ),
        array( 'icofont icofont-stethoscope-alt'       => 'Stethoscope-Alt' ),
        array( 'icofont icofont-stretcher'       => 'Stretcher' ),
        array( 'icofont icofont-surgeon'       => 'Surgeon' ),
        array( 'icofont icofont-surgeon-alt'       => 'Surgeon-Alt' ),
        array( 'icofont icofont-tablets'       => 'Tablets' ),
        array( 'icofont icofont-test-bottle'       => 'Test-Bottle' ),
        array( 'icofont icofont-test-tube'       => 'Test-Tube' ),
        array( 'icofont icofont-thermometer-alt'       => 'Thermometer-Alt' ),
        array( 'icofont icofont-tooth'       => 'Tooth' ),
        array( 'icofont icofont-xray'       => 'Xray' ),
        array( 'icofont icofont-ui-add'       => 'UI-Add' ),
        array( 'icofont icofont-ui-alarm'       => 'UI-Alarm' ),
        array( 'icofont icofont-ui-battery'       => 'UI-Battery' ),
        array( 'icofont icofont-ui-block'       => 'UI-Block' ),
        array( 'icofont icofont-ui-bluetooth'       => 'UI-Bluetooth' ),
        array( 'icofont icofont-ui-brightness'       => 'UI-Brightness' ),
        array( 'icofont icofont-ui-browser'       => 'UI-Browser' ),
        array( 'icofont icofont-ui-calculator'       => 'UI-Calculator' ),
        array( 'icofont icofont-ui-calendar'       => 'UI-Calendar' ),
        array( 'icofont icofont-ui-call'       => 'UI-Call' ),
        array( 'icofont icofont-ui-camera'       => 'UI-Camera' ),
        array( 'icofont icofont-ui-cart'       => 'UI-Cart' ),
        array( 'icofont icofont-ui-cell-phone'       => 'UI-Cell-Phone' ),
        array( 'icofont icofont-ui-chat'       => 'UI-Chat' ),
        array( 'icofont icofont-ui-check'       => 'UI-Check' ),
        array( 'icofont icofont-ui-clip'       => 'UI-Clip' ),
        array( 'icofont icofont-ui-clip-board'       => 'UI-Clip-Board' ),
        array( 'icofont icofont-ui-clock'       => 'UI-Clock' ),
        array( 'icofont icofont-ui-close'       => 'UI-Close' ),
        array( 'icofont icofont-ui-contact-list'       => 'UI-Contact-List' ),
        array( 'icofont icofont-ui-copy'       => 'UI-Copy' ),
        array( 'icofont icofont-ui-cut'       => 'UI-Cut' ),
        array( 'icofont icofont-ui-delete'       => 'UI-Delete' ),
        array( 'icofont icofont-ui-dial-phone'       => 'UI-Dial-Phone' ),
        array( 'icofont icofont-ui-edit'       => 'UI-Edit' ),
        array( 'icofont icofont-ui-email'       => 'UI-Email' ),
        array( 'icofont icofont-ui-file'       => 'UI-File' ),
        array( 'icofont icofont-ui-fire-wall'       => 'UI-Fire-Wall' ),
        array( 'icofont icofont-ui-flash-light'       => 'UI-Flash-Light' ),
        array( 'icofont icofont-ui-flight'       => 'UI-Flight' ),
        array( 'icofont icofont-ui-folder'       => 'UI-Folder' ),
        array( 'icofont icofont-ui-game'       => 'UI-Game' ),
        array( 'icofont icofont-ui-handicapped'       => 'UI-Handicapped' ),
        array( 'icofont icofont-ui-head-phone'       => 'UI-Head-Phone' ),
        array( 'icofont icofont-ui-home'       => 'UI-Home' ),
        array( 'icofont icofont-ui-image'       => 'UI-Image' ),
        array( 'icofont icofont-ui-keyboard'       => 'UI-Keyboard' ),
        array( 'icofont icofont-ui-laoding'       => 'UI-Laoding' ),
        array( 'icofont icofont-ui-lock'       => 'UI-Lock' ),
        array( 'icofont icofont-ui-love'       => 'UI-Love' ),
        array( 'icofont icofont-ui-love-add'       => 'UI-Love-Add' ),
        array( 'icofont icofont-ui-love-broken'       => 'UI-Love-Broken' ),
        array( 'icofont icofont-ui-love-remove'       => 'UI-Love-Remove' ),
        array( 'icofont icofont-ui-map'       => 'UI-Map' ),
        array( 'icofont icofont-ui-message'       => 'UI-Message' ),
        array( 'icofont icofont-ui-messaging'       => 'UI-Messaging' ),
        array( 'icofont icofont-ui-movie'       => 'UI-Movie' ),
        array( 'icofont icofont-ui-music'       => 'UI-Music' ),
        array( 'icofont icofont-ui-music-player'       => 'UI-Music-Player' ),
        array( 'icofont icofont-ui-mute'       => 'UI-Mute' ),
        array( 'icofont icofont-ui-network'       => 'UI-Network' ),
        array( 'icofont icofont-ui-next'       => 'UI-Next' ),
        array( 'icofont icofont-ui-note'       => 'UI-Note' ),
        array( 'icofont icofont-ui-office'       => 'UI-Office' ),
        array( 'icofont icofont-ui-password'       => 'UI-Password' ),
        array( 'icofont icofont-ui-pause'       => 'UI-Pause' ),
        array( 'icofont icofont-ui-play'       => 'UI-Play' ),
        array( 'icofont icofont-ui-play-stop'       => 'UI-Play-Stop' ),
        array( 'icofont icofont-ui-pointer'       => 'UI-Pointer' ),
        array( 'icofont icofont-ui-power'       => 'UI-Power' ),
        array( 'icofont icofont-ui-press'       => 'UI-Press' ),
        array( 'icofont icofont-ui-previous'       => 'UI-Previous' ),
        array( 'icofont icofont-ui-rate-add'       => 'UI-Rate-Add' ),
        array( 'icofont icofont-ui-rate-blank'       => 'UI-Rate-Blank' ),
        array( 'icofont icofont-ui-rate-remove'       => 'UI-Rate-Remove' ),
        array( 'icofont icofont-ui-rating'       => 'UI-Rating' ),
        array( 'icofont icofont-ui-record'       => 'UI-Record' ),
        array( 'icofont icofont-ui-remove'       => 'UI-Remove' ),
        array( 'icofont icofont-ui-reply'       => 'UI-Reply' ),
        array( 'icofont icofont-ui-rotation'       => 'UI-Rotation' ),
        array( 'icofont icofont-ui-rss'       => 'UI-RSS' ),
        array( 'icofont icofont-ui-search'       => 'UI-Search' ),
        array( 'icofont icofont-ui-settings'       => 'UI-Settings' ),
        array( 'icofont icofont-ui-social-link'       => 'UI-Social-Link' ),
        array( 'icofont icofont-ui-tag'       => 'UI-Tag' ),
        array( 'icofont icofont-ui-text-chat'       => 'UI-Text-Chat' ),
        array( 'icofont icofont-ui-text-loading'       => 'UI-Text-Loading' ),
        array( 'icofont icofont-ui-theme'       => 'UI-Theme' ),
        array( 'icofont icofont-ui-timer'       => 'UI-Timer' ),
        array( 'icofont icofont-ui-touch-phone'       => 'UI-Touch-Phone' ),
        array( 'icofont icofont-ui-travel'       => 'UI-Travel' ),
        array( 'icofont icofont-ui-unlock'       => 'UI-Unlock' ),
        array( 'icofont icofont-ui-user'       => 'UI-User' ),
        array( 'icofont icofont-ui-user-group'       => 'UI-User-Group' ),
        array( 'icofont icofont-ui-v-card'       => 'UI-V-Card' ),
        array( 'icofont icofont-ui-video'       => 'UI-Video' ),
        array( 'icofont icofont-ui-video-chat'       => 'UI-Video-Chat' ),
        array( 'icofont icofont-ui-video-message'       => 'UI-Video-Message' ),
        array( 'icofont icofont-ui-video-play'       => 'UI-Video-Play' ),
        array( 'icofont icofont-ui-volume'       => 'UI-Volume' ),
        array( 'icofont icofont-ui-weather'       => 'UI-Weather' ),
        array( 'icofont icofont-ui-wifi'       => 'UI-WiFi' ),
        array( 'icofont icofont-ui-zoom-in'       => 'UI-Zoom-In' ),
        array( 'icofont icofont-ui-zoom-out'       => 'UI-Zoom-Out' ),
        array( 'icofont icofont-cassette'       => 'Cassette' ),
        array( 'icofont icofont-cassette-player'       => 'Cassette-Player' ),
        array( 'icofont icofont-forward'       => 'Forward' ),
        array( 'icofont icofont-game'       => 'Game' ),
        array( 'icofont icofont-guiter'       => 'Guiter' ),
        array( 'icofont icofont-headphone-alt-1'       => 'Headphone-Alt-1' ),
        array( 'icofont icofont-headphone-alt-2'       => 'Headphone-Alt-2' ),
        array( 'icofont icofont-headphone-alt-3'       => 'Headphone-Alt-3' ),
        array( 'icofont icofont-listening'       => 'Listening' ),
        array( 'icofont icofont-megaphone'       => 'Megaphone' ),
        array( 'icofont icofont-megaphone-alt'       => 'Megaphone-Alt' ),
        array( 'icofont icofont-movie'       => 'Movie' ),
        array( 'icofont icofont-mp3-player'       => 'MP3-Player' ),
        array( 'icofont icofont-multimedia'       => 'Multimedia' ),
        array( 'icofont icofont-music-disk'       => 'Music-Disk' ),
        array( 'icofont icofont-music-note'       => 'Music-Note' ),
        array( 'icofont icofont-pause'       => 'Pause' ),
        array( 'icofont icofont-play-alt-1'       => 'Play-Alt-1' ),
        array( 'icofont icofont-play-alt-2'       => 'Play-Alt-2' ),
        array( 'icofont icofont-play-alt-3'       => 'Play-Alt-3' ),
        array( 'icofont icofont-play-pause'       => 'Play-Pause' ),
        array( 'icofont icofont-record'       => 'Record' ),
        array( 'icofont icofont-retro-music-disk'       => 'Retro-Music-Disk' ),
        array( 'icofont icofont-rewind'       => 'Rewind' ),
        array( 'icofont icofont-song-notes'       => 'Song-Notes' ),
        array( 'icofont icofont-sound-wave'       => 'Sound-Wave' ),
        array( 'icofont icofont-sound-wave-alt'       => 'Sound-Wave-Alt' ),
        array( 'icofont icofont-stop'       => 'Stop' ),
        array( 'icofont icofont-video-alt'       => 'Video-Alt' ),
        array( 'icofont icofont-video-cam'       => 'Video-Cam' ),
        array( 'icofont icofont-volume-bar'       => 'Volume-Bar' ),
        array( 'icofont icofont-volume-mute'       => 'Volume-Mute' ),
        array( 'icofont icofont-youtube-play'       => 'YouTube-Play' ),
        array( 'icofont icofont-amazon'       => 'Amazon' ),
        array( 'icofont icofont-amazon-alt'       => 'Amazon-Alt' ),
        array( 'icofont icofont-american-express'       => 'American-Express' ),
        array( 'icofont icofont-american-express-alt'       => 'American-Express-Alt' ),
        array( 'icofont icofont-apple-pay'       => 'Apple-Pay' ),
        array( 'icofont icofont-apple-pay-alt'       => 'Apple-Pay-Alt' ),
        array( 'icofont icofont-bank-transfer'       => 'Bank-Transfer' ),
        array( 'icofont icofont-bank-transfer-alt'       => 'Bank-Transfer-Alt' ),
        array( 'icofont icofont-braintree'       => 'Braintree' ),
        array( 'icofont icofont-braintree-alt'       => 'Braintree-Alt' ),
        array( 'icofont icofont-cash-on-delivery'       => 'Cash-On-Delivery' ),
        array( 'icofont icofont-cash-on-delivery-alt'       => 'Cash-On-Delivery-Alt' ),
        array( 'icofont icofont-checkout'       => 'Checkout' ),
        array( 'icofont icofont-checkout-alt'       => 'Checkout-Alt' ),
        array( 'icofont icofont-diners-club'       => 'Diners-Club' ),
        array( 'icofont icofont-diners-club-alt-1'       => 'Diners-Club-Alt-1' ),
        array( 'icofont icofont-diners-club-alt-2'       => 'Diners-Club-Alt-2' ),
        array( 'icofont icofont-diners-club-alt-3'       => 'Diners-Club-Alt-3' ),
        array( 'icofont icofont-discover'       => 'Discover' ),
        array( 'icofont icofont-discover-alt'       => 'Discover-Alt' ),
        array( 'icofont icofont-eway'       => 'eWAY' ),
        array( 'icofont icofont-eway-alt'       => 'eWAY-Alt' ),
        array( 'icofont icofont-google-wallet'       => 'Google-Wallet' ),
        array( 'icofont icofont-google-wallet-alt-1'       => 'Google-Wallet-Alt-1' ),
        array( 'icofont icofont-google-wallet-alt-2'       => 'Google-Wallet-Alt-2' ),
        array( 'icofont icofont-google-wallet-alt-3'       => 'Google-Wallet-Alt-3' ),
        array( 'icofont icofont-jcb'       => 'JCB' ),
        array( 'icofont icofont-jcb-alt'       => 'JCB-Alt' ),
        array( 'icofont icofont-maestro'       => 'Maestro' ),
        array( 'icofont icofont-maestro-alt'       => 'Maestro-Alt' ),
        array( 'icofont icofont-mastercard'       => 'Mastercard' ),
        array( 'icofont icofont-mastercard-alt'       => 'Mastercard-Alt' ),
        array( 'icofont icofont-payoneer'       => 'Payoneer' ),
        array( 'icofont icofont-payoneer-alt'       => 'Payoneer-Alt' ),
        array( 'icofont icofont-paypal'       => 'PayPal' ),
        array( 'icofont icofont-paypal-alt'       => 'PayPal-Alt' ),
        array( 'icofont icofont-sage'       => 'Sage' ),
        array( 'icofont icofont-sage-alt'       => 'Sage-Alt' ),
        array( 'icofont icofont-skrill'       => 'Skrill' ),
        array( 'icofont icofont-skrill-alt'       => 'Skrill-Alt' ),
        array( 'icofont icofont-stripe'       => 'Stripe' ),
        array( 'icofont icofont-stripe-alt'       => 'Stripe-Alt' ),
        array( 'icofont icofont-visa'       => 'Visa' ),
        array( 'icofont icofont-visa-alt'       => 'Visa-Alt' ),
        array( 'icofont icofont-visa-electron'       => 'Visa-Electron' ),
        array( 'icofont icofont-western-union'       => 'Western-Union' ),
        array( 'icofont icofont-western-union-alt'       => 'Western-Union-Alt' ),
        array( 'icofont icofont-boy'       => 'Boy' ),
        array( 'icofont icofont-business-man'       => 'Business-Man' ),
        array( 'icofont icofont-business-man-alt-1'       => 'Business-Man-Alt-1' ),
        array( 'icofont icofont-business-man-alt-2'       => 'Business-Man-Alt-2' ),
        array( 'icofont icofont-business-man-alt-3'       => 'Business-Man-Alt-3' ),
        array( 'icofont icofont-funky-man'       => 'Funky-Man' ),
        array( 'icofont icofont-girl'       => 'Girl' ),
        array( 'icofont icofont-girl-alt'       => 'Girl-Alt' ),
        array( 'icofont icofont-hotel-boy'       => 'Hotel-Boy' ),
        array( 'icofont icofont-hotel-boy-alt'       => 'Hotel-Boy-Alt' ),
        array( 'icofont icofont-man-in-glasses'       => 'Man-In-Glasses' ),
        array( 'icofont icofont-user'       => 'User' ),
        array( 'icofont icofont-user-alt-1'       => 'User-Alt-1' ),
        array( 'icofont icofont-user-alt-2'       => 'User-Alt-2' ),
        array( 'icofont icofont-user-alt-3'       => 'User-Alt-3' ),
        array( 'icofont icofont-user-alt-4'       => 'User-Alt-4' ),
        array( 'icofont icofont-user-alt-5'       => 'User-Alt-5' ),
        array( 'icofont icofont-user-alt-6'       => 'User-Alt-6' ),
        array( 'icofont icofont-user-alt-7'       => 'User-Alt-7' ),
        array( 'icofont icofont-user-female'       => 'User-Female' ),
        array( 'icofont icofont-user-male'       => 'User-Male' ),
        array( 'icofont icofont-user-suited'       => 'User-Suited' ),
        array( 'icofont icofont-users'       => 'Users' ),
        array( 'icofont icofont-users-alt-1'       => 'Users-Alt-1' ),
        array( 'icofont icofont-users-alt-2'       => 'Users-Alt-2' ),
        array( 'icofont icofont-users-alt-3'       => 'Users-Alt-3' ),
        array( 'icofont icofont-users-alt-4'       => 'Users-Alt-4' ),
        array( 'icofont icofont-users-alt-5'       => 'Users-Alt-5' ),
        array( 'icofont icofont-users-alt-6'       => 'Users-Alt-6' ),
        array( 'icofont icofont-users-social'       => 'Users-Social' ),
        array( 'icofont icofont-waiter'       => 'Waiter' ),
        array( 'icofont icofont-woman-in-glasses'       => 'Woman-In-Glasses' ),
        array( 'icofont icofont-document-search'       => 'Document-Search' ),
        array( 'icofont icofont-folder-search'       => 'Folder-Search' ),
        array( 'icofont icofont-home-search'       => 'Home-Search' ),
        array( 'icofont icofont-job-search'       => 'Job-Search' ),
        array( 'icofont icofont-map-search'       => 'Map-Search' ),
        array( 'icofont icofont-restaurant-search'       => 'Restaurant-Search' ),
        array( 'icofont icofont-search'       => 'Search' ),
        array( 'icofont icofont-search-alt-1'       => 'Search-Alt-1' ),
        array( 'icofont icofont-search-alt-2'       => 'Search-Alt-2' ),
        array( 'icofont icofont-stock-search'       => 'Stock-Search' ),
        array( 'icofont icofont-user-search'       => 'User-Search' ),
        array( 'icofont icofont-brand-drupal'       => 'Brand-Drupal' ),
        array( 'icofont icofont-social-500px'       => 'Social-500px' ),
        array( 'icofont icofont-social-aim'       => 'Social-Aim' ),
        array( 'icofont icofont-social-badoo'       => 'Social-Badoo' ),
        array( 'icofont icofont-social-baidu-tieba'       => 'Social-Baidu-Tieba' ),
        array( 'icofont icofont-social-bbm-messenger'       => 'Social-Bbm-Messenger' ),
        array( 'icofont icofont-social-bebo'       => 'Social-Bebo' ),
        array( 'icofont icofont-social-behance'       => 'Social-Behance' ),
        array( 'icofont icofont-social-blogger'       => 'Social-Blogger' ),
        array( 'icofont icofont-social-bootstrap'       => 'Social-Bootstrap' ),
        array( 'icofont icofont-social-brightkite'       => 'Social-Brightkite' ),
        array( 'icofont icofont-social-cloudapp'       => 'Social-CloudApp' ),
        array( 'icofont icofont-social-concrete5'       => 'Social-Concrete5' ),
        array( 'icofont icofont-social-delicious'       => 'Social-Delicious' ),
        array( 'icofont icofont-social-designbump'       => 'Social-Designbump' ),
        array( 'icofont icofont-social-designfloat'       => 'Social-Designfloat' ),
        array( 'icofont icofont-social-deviantart'       => 'Social-Deviantart' ),
        array( 'icofont icofont-social-digg'       => 'Social-Digg' ),
        array( 'icofont icofont-social-dotcms'       => 'Social-Dotcms' ),
        array( 'icofont icofont-social-dribbble'       => 'Social-Dribbble' ),
        array( 'icofont icofont-social-dribble'       => 'Social-Dribble' ),
        array( 'icofont icofont-social-dropbox'       => 'Social-Dropbox' ),
        array( 'icofont icofont-social-ebuddy'       => 'Social-eBuddy' ),
        array( 'icofont icofont-social-ello'       => 'Social-Ello' ),
        array( 'icofont icofont-social-ember'       => 'Social-Ember' ),
        array( 'icofont icofont-social-evernote'       => 'Social-Evernote' ),
        array( 'icofont icofont-social-facebook'       => 'Social-Facebook' ),
        array( 'icofont icofont-social-facebook-messenger'       => 'Social-Facebook-Messenger' ),
        array( 'icofont icofont-social-feedburner'       => 'Social-FeedBurner' ),
        array( 'icofont icofont-social-flikr'       => 'Social-Flikr' ),
        array( 'icofont icofont-social-folkd'       => 'Social-Folkd' ),
        array( 'icofont icofont-social-foursquare'       => 'Social-Foursquare' ),
        array( 'icofont icofont-social-friendfeed'       => 'Social-FriendFeed' ),
        array( 'icofont icofont-social-ghost'       => 'Social-Ghost' ),
        array( 'icofont icofont-social-github'       => 'Social-GitHub' ),
        array( 'icofont icofont-social-gnome'       => 'Social-Gnome' ),
        array( 'icofont icofont-social-google-buzz'       => 'Social-Google-Buzz' ),
        array( 'icofont icofont-social-google-hangouts'       => 'Social-Google-Hangouts' ),
        array( 'icofont icofont-social-google-map'       => 'Social-Google-Map' ),
        array( 'icofont icofont-social-google-plus'       => 'Social-Google-Plus' ),
        array( 'icofont icofont-social-google-talk'       => 'Social-Google-Talk' ),
        array( 'icofont icofont-social-hype-machine'       => 'Social-Hype-Machine' ),
        array( 'icofont icofont-social-instagram'       => 'Social-Instagram' ),
        array( 'icofont icofont-social-kakaotalk'       => 'Social-Kakaotalk' ),
        array( 'icofont icofont-social-kickstarter'       => 'Social-Kickstarter' ),
        array( 'icofont icofont-social-kik'       => 'Social-Kik' ),
        array( 'icofont icofont-social-kiwibox'       => 'Social-Kiwibox' ),
        array( 'icofont icofont-social-line'       => 'Social-Line' ),
        array( 'icofont icofont-social-linkedin'       => 'Social-Linkedin' ),
        array( 'icofont icofont-social-linux-mint'       => 'Social-Linux-Mint' ),
        array( 'icofont icofont-social-livejournal'       => 'Social-LiveJournal' ),
        array( 'icofont icofont-social-magento'       => 'Social-Magento' ),
        array( 'icofont icofont-social-meetme'       => 'Social-Meetme' ),
        array( 'icofont icofont-social-meetup'       => 'Social-Meetup' ),
        array( 'icofont icofont-social-mixx'       => 'Social-Mixx' ),
        array( 'icofont icofont-social-newsvine'       => 'Social-Newsvine' ),
        array( 'icofont icofont-social-nimbuss'       => 'Social-Nimbuss' ),
        array( 'icofont icofont-social-odnoklassniki'       => 'Social-Odnoklassniki' ),
        array( 'icofont icofont-social-opencart'       => 'Social-OpenCart' ),
        array( 'icofont icofont-social-oscommerce'       => 'Social-OsCommerce' ),
        array( 'icofont icofont-social-pandora'       => 'Social-Pandora' ),
        array( 'icofont icofont-social-photobucket'       => 'Social-Photobucket' ),
        array( 'icofont icofont-social-picasa'       => 'Social-Picasa' ),
        array( 'icofont icofont-social-pinterest'       => 'Social-Pinterest' ),
        array( 'icofont icofont-social-prestashop'       => 'Social-PrestaShop' ),
        array( 'icofont icofont-social-qik'       => 'Social-Qik' ),
        array( 'icofont icofont-social-qq'       => 'Social-QQ' ),
        array( 'icofont icofont-social-readernaut'       => 'Social-Readernaut' ),
        array( 'icofont icofont-social-reddit'       => 'Social-Reddit' ),
        array( 'icofont icofont-social-renren'       => 'Social-Renren' ),
        array( 'icofont icofont-social-rss'       => 'Social-RSS' ),
        array( 'icofont icofont-social-shopify'       => 'Social-Shopify' ),
        array( 'icofont icofont-social-silverstripe'       => 'Social-SilverStripe' ),
        array( 'icofont icofont-social-skype'       => 'Social-Skype' ),
        array( 'icofont icofont-social-slack'       => 'Social-Slack' ),
        array( 'icofont icofont-social-slashdot'       => 'Social-Slashdot' ),
        array( 'icofont icofont-social-slidshare'       => 'Social-Slidshare' ),
        array( 'icofont icofont-social-smugmug'       => 'Social-SmugMug' ),
        array( 'icofont icofont-social-snapchat'       => 'Social-Snapchat' ),
        array( 'icofont icofont-social-soundcloud'       => 'Social-SoundCloud' ),
        array( 'icofont icofont-social-spotify'       => 'Social-Spotify' ),
        array( 'icofont icofont-social-stack-exchange'       => 'Social-Stack-Exchange' ),
        array( 'icofont icofont-social-stack-overflow'       => 'Social-Stack-Overflow' ),
        array( 'icofont icofont-social-steam'       => 'Social-Steam' ),
        array( 'icofont icofont-social-stumbleupon'       => 'Social-StumbleUpon' ),
        array( 'icofont icofont-social-tagged'       => 'Social-Tagged' ),
        array( 'icofont icofont-social-technorati'       => 'Social-Technorati' ),
        array( 'icofont icofont-social-telegram'       => 'Social-Telegram' ),
        array( 'icofont icofont-social-tinder'       => 'Social-Tinder' ),
        array( 'icofont icofont-social-trello'       => 'Social-Trello' ),
        array( 'icofont icofont-social-tumblr'       => 'Social-Tumblr' ),
        array( 'icofont icofont-social-twitch'       => 'Social-Twitch' ),
        array( 'icofont icofont-social-twitter'       => 'Social-Twitter' ),
        array( 'icofont icofont-social-typo3'       => 'Social-Typo3' ),
        array( 'icofont icofont-social-ubercart'       => 'Social-Ubercart' ),
        array( 'icofont icofont-social-viber'       => 'Social-Viber' ),
        array( 'icofont icofont-social-viddler'       => 'Social-Viddler' ),
        array( 'icofont icofont-social-vimeo'       => 'Social-Vimeo' ),
        array( 'icofont icofont-social-vine'       => 'Social-Vine' ),
        array( 'icofont icofont-social-virb'       => 'Social-Virb' ),
        array( 'icofont icofont-social-virtuemart'       => 'Social-VirtueMart' ),
        array( 'icofont icofont-social-vk'       => 'Social-VK' ),
        array( 'icofont icofont-social-wechat'       => 'Social-WeChat' ),
        array( 'icofont icofont-social-weibo'       => 'Social-Weibo' ),
        array( 'icofont icofont-social-whatsapp'       => 'Social-WhatsApp' ),
        array( 'icofont icofont-social-xing'       => 'Social-XING' ),
        array( 'icofont icofont-social-yahoo'       => 'Social-Yahoo' ),
        array( 'icofont icofont-social-yelp'       => 'Social-Yelp' ),
        array( 'icofont icofont-social-youku'       => 'Social-Youku' ),
        array( 'icofont icofont-social-youtube'       => 'Social-YouTube' ),
        array( 'icofont icofont-social-youtube-play'       => 'Social-YouTube-Play' ),
        array( 'icofont icofont-social-zencart'       => 'Social-ZenCart' ),
        array( 'icofont icofont-badminton-birdie'       => 'Badminton-Birdie' ),
        array( 'icofont icofont-baseball'       => 'Baseball' ),
        array( 'icofont icofont-baseballer'       => 'Baseballer' ),
        array( 'icofont icofont-basketball'       => 'Basketball' ),
        array( 'icofont icofont-basketball-hoop'       => 'Basketball-Hoop' ),
        array( 'icofont icofont-billiard-ball'       => 'Billiard-Ball' ),
        array( 'icofont icofont-boot-alt-1'       => 'Boot-Alt-1' ),
        array( 'icofont icofont-boot-alt-2'       => 'Boot-Alt-2' ),
        array( 'icofont icofont-bowling'       => 'Bowling' ),
        array( 'icofont icofont-bowling-alt'       => 'Bowling-Alt' ),
        array( 'icofont icofont-canoe'       => 'Canoe' ),
        array( 'icofont icofont-cheer-leader'       => 'Cheer-Leader' ),
        array( 'icofont icofont-climbing'       => 'Climbing' ),
        array( 'icofont icofont-corner'       => 'Corner' ),
        array( 'icofont icofont-cyclist'       => 'Cyclist' ),
        array( 'icofont icofont-dumbbell'       => 'Dumbbell' ),
        array( 'icofont icofont-dumbbell-alt'       => 'Dumbbell-Alt' ),
        array( 'icofont icofont-field'       => 'Field' ),
        array( 'icofont icofont-field-alt'       => 'Field-Alt' ),
        array( 'icofont icofont-football-alt'       => 'Football-Alt' ),
        array( 'icofont icofont-foul'       => 'Foul' ),
        array( 'icofont icofont-goal'       => 'Goal' ),
        array( 'icofont icofont-goal-keeper'       => 'Goal-Keeper' ),
        array( 'icofont icofont-golf'       => 'Golf' ),
        array( 'icofont icofont-golf-alt'       => 'Golf-Alt' ),
        array( 'icofont icofont-golf-bag'       => 'Golf-Bag' ),
        array( 'icofont icofont-golf-field'       => 'Golf-Field' ),
        array( 'icofont icofont-golfer'       => 'Golfer' ),
        array( 'icofont icofont-gym'       => 'Gym' ),
        array( 'icofont icofont-gym-alt-1'       => 'Gym-Alt-1' ),
        array( 'icofont icofont-gym-alt-2'       => 'Gym-Alt-2' ),
        array( 'icofont icofont-gym-alt-3'       => 'Gym-Alt-3' ),
        array( 'icofont icofont-hand-grippers'       => 'Hand-Grippers' ),
        array( 'icofont icofont-heart-beat-alt'       => 'Heart-Beat-Alt' ),
        array( 'icofont icofont-helmet'       => 'Helmet' ),
        array( 'icofont icofont-hockey'       => 'Hockey' ),
        array( 'icofont icofont-hockey-alt'       => 'Hockey-Alt' ),
        array( 'icofont icofont-ice-skate'       => 'Ice-Skate' ),
        array( 'icofont icofont-jersey'       => 'Jersey' ),
        array( 'icofont icofont-jersey-alt'       => 'Jersey-Alt' ),
        array( 'icofont icofont-jumping'       => 'Jumping' ),
        array( 'icofont icofont-kick'       => 'Kick' ),
        array( 'icofont icofont-leg'       => 'Leg' ),
        array( 'icofont icofont-match-review'       => 'Match-Review' ),
        array( 'icofont icofont-medal-alt'       => 'Medal-Alt' ),
        array( 'icofont icofont-muscle'       => 'Muscle' ),
        array( 'icofont icofont-muscle-alt'       => 'Muscle-Alt' ),
        array( 'icofont icofont-offside'       => 'Offside' ),
        array( 'icofont icofont-olympic'       => 'Olympic' ),
        array( 'icofont icofont-olympic-logo'       => 'Olympic-Logo' ),
        array( 'icofont icofont-padding'       => 'Padding' ),
        array( 'icofont icofont-penalty-card'       => 'Penalty-card' ),
        array( 'icofont icofont-racer'       => 'Racer' ),
        array( 'icofont icofont-racing-car'       => 'Racing-Car' ),
        array( 'icofont icofont-racing-flag'       => 'Racing-Flag' ),
        array( 'icofont icofont-racing-flag-alt'       => 'Racing-Flag-Alt' ),
        array( 'icofont icofont-racings-wheel'       => 'Racings-Wheel' ),
        array( 'icofont icofont-referee'       => 'Referee' ),
        array( 'icofont icofont-refree-jersey'       => 'Refree-Jersey' ),
        array( 'icofont icofont-result'       => 'Result' ),
        array( 'icofont icofont-rugby'       => 'Rugby' ),
        array( 'icofont icofont-rugby-ball'       => 'Rugby-Ball' ),
        array( 'icofont icofont-rugby-player'       => 'Rugby-Player' ),
        array( 'icofont icofont-runner'       => 'Runner' ),
        array( 'icofont icofont-runner-alt-1'       => 'Runner-Alt-1' ),
        array( 'icofont icofont-runner-alt-2'       => 'Runner-Alt-2' ),
        array( 'icofont icofont-score-board'       => 'Score-Board' ),
        array( 'icofont icofont-skiing-man'       => 'Skiing-Man' ),
        array( 'icofont icofont-skydiving-goggles'       => 'Skydiving-Goggles' ),
        array( 'icofont icofont-snow-mobile'       => 'Snow-Mobile' ),
        array( 'icofont icofont-steering'       => 'Steering' ),
        array( 'icofont icofont-substitute'       => 'Substitute' ),
        array( 'icofont icofont-swimmer'       => 'Swimmer' ),
        array( 'icofont icofont-table-tennis'       => 'Table-Tennis' ),
        array( 'icofont icofont-team'       => 'Team' ),
        array( 'icofont icofont-team-alt'       => 'Team-Alt' ),
        array( 'icofont icofont-tennis'       => 'Tennis' ),
        array( 'icofont icofont-tennis-player'       => 'Tennis-Player' ),
        array( 'icofont icofont-time'       => 'Time' ),
        array( 'icofont icofont-track'       => 'Track' ),
        array( 'icofont icofont-tracking'       => 'Tracking' ),
        array( 'icofont icofont-trophy'       => 'Trophy' ),
        array( 'icofont icofont-trophy-alt'       => 'Trophy-Alt' ),
        array( 'icofont icofont-volleyball'       => 'Volleyball' ),
        array( 'icofont icofont-volleyball-alt'       => 'Volleyball-Alt' ),
        array( 'icofont icofont-volleyball-fire'       => 'Volleyball-Fire' ),
        array( 'icofont icofont-water-bottle'       => 'Water-Bottle' ),
        array( 'icofont icofont-whisle'       => 'Whisle' ),
        array( 'icofont icofont-win-trophy'       => 'Win-Trophy' ),
        array( 'icofont icofont-align-center'       => 'Align-Center' ),
        array( 'icofont icofont-align-left'       => 'Align-Left' ),
        array( 'icofont icofont-align-right'       => 'Align-Right' ),
        array( 'icofont icofont-all-caps'       => 'All-Caps' ),
        array( 'icofont icofont-bold'       => 'Bold' ),
        array( 'icofont icofont-brush'       => 'Brush' ),
        array( 'icofont icofont-clip-board'       => 'Clip-Board' ),
        array( 'icofont icofont-code-alt'       => 'Code-Alt' ),
        array( 'icofont icofont-color-bucket'       => 'Color-Bucket' ),
        array( 'icofont icofont-color-picker'       => 'Color-Picker' ),
        array( 'icofont icofont-copy-alt'       => 'Copy-Alt' ),
        array( 'icofont icofont-copy-black'       => 'Copy-Black' ),
        array( 'icofont icofont-cut'       => 'Cut' ),
        array( 'icofont icofont-delete-alt'       => 'Delete-Alt' ),
        array( 'icofont icofont-edit-alt'       => 'Edit-Alt' ),
        array( 'icofont icofont-eraser-alt'       => 'Eraser-Alt' ),
        array( 'icofont icofont-file-alt'       => 'File-Alt' ),
        array( 'icofont icofont-font'       => 'Font' ),
        array( 'icofont icofont-header'       => 'Header' ),
        array( 'icofont icofont-indent'       => 'Indent' ),
        array( 'icofont icofont-italic-alt'       => 'Italic-Alt' ),
        array( 'icofont icofont-justify-all'       => 'Justify-All' ),
        array( 'icofont icofont-justify-center'       => 'Justify-Center' ),
        array( 'icofont icofont-justify-left'       => 'Justify-Left' ),
        array( 'icofont icofont-justify-right'       => 'Justify-Right' ),
        array( 'icofont icofont-line-height'       => 'Line-Height' ),
        array( 'icofont icofont-link-alt'       => 'Link-Alt' ),
        array( 'icofont icofont-listine-dots'       => 'Listine-Dots' ),
        array( 'icofont icofont-listing-box'       => 'Listing-Box' ),
        array( 'icofont icofont-listing-number'       => 'Listing-Number' ),
        array( 'icofont icofont-marker'       => 'Marker' ),
        array( 'icofont icofont-outdent'       => 'Outdent' ),
        array( 'icofont icofont-paper-clip'       => 'Paper-Clip' ),
        array( 'icofont icofont-paragraph'       => 'paragraph' ),
        array( 'icofont icofont-pin'       => 'Pin' ),
        array( 'icofont icofont-printer'       => 'Printer' ),
        array( 'icofont icofont-redo'       => 'Redo' ),
        array( 'icofont icofont-rotation'       => 'Rotation' ),
        array( 'icofont icofont-save'       => 'Save' ),
        array( 'icofont icofont-small-cap'       => 'Small-Cap' ),
        array( 'icofont icofont-strike-through'       => 'Strike-Through' ),
        array( 'icofont icofont-sub-listing'       => 'Sub-Listing' ),
        array( 'icofont icofont-subscript'       => 'Subscript' ),
        array( 'icofont icofont-superscript'       => 'Superscript' ),
        array( 'icofont icofont-table'       => 'Table' ),
        array( 'icofont icofont-text-height'       => 'Text-Height' ),
        array( 'icofont icofont-text-width'       => 'Text-Width' ),
        array( 'icofont icofont-trash'       => 'Trash' ),
        array( 'icofont icofont-underline'       => 'Underline' ),
        array( 'icofont icofont-undo'       => 'Undo' ),
        array( 'icofont icofont-unlink'       => 'Unlink' ),
        array( 'icofont icofont-air-balloon'       => 'Air-Balloon' ),
        array( 'icofont icofont-airplane'       => 'Airplane' ),
        array( 'icofont icofont-airplane-alt'       => 'Airplane-Alt' ),
        array( 'icofont icofont-ambulance-crescent'       => 'Ambulance-Crescent' ),
        array( 'icofont icofont-ambulance-cross'       => 'Ambulance-Cross' ),
        array( 'icofont icofont-articulated-truck'       => 'Articulated-Truck' ),
        array( 'icofont icofont-auto-rickshaw'       => 'Auto-Rickshaw' ),
        array( 'icofont icofont-bicycle-alt-1'       => 'Bicycle-Alt-1' ),
        array( 'icofont icofont-bicycle-alt-2'       => 'Bicycle-Alt-2' ),
        array( 'icofont icofont-bull-dozer'       => 'Bull-Dozer' ),
        array( 'icofont icofont-bus-alt-1'       => 'Bus-Alt-1' ),
        array( 'icofont icofont-bus-alt-2'       => 'Bus-Alt-2' ),
        array( 'icofont icofont-bus-alt-3'       => 'Bus-Alt-3' ),
        array( 'icofont icofont-cable-car'       => 'Cable-Car' ),
        array( 'icofont icofont-car-alt-1'       => 'Car-Alt-1' ),
        array( 'icofont icofont-car-alt-2'       => 'Car-Alt-2' ),
        array( 'icofont icofont-car-alt-3'       => 'Car-Alt-3' ),
        array( 'icofont icofont-car-alt-4'       => 'Car-Alt-4' ),
        array( 'icofont icofont-concrete-mixer'       => 'Concrete-Mixer' ),
        array( 'icofont icofont-delivery-time'       => 'Delivery-Time' ),
        array( 'icofont icofont-excavator'       => 'Excavator' ),
        array( 'icofont icofont-fast-delivery'       => 'Fast-Delivery' ),
        array( 'icofont icofont-fire-truck'       => 'Fire-Truck' ),
        array( 'icofont icofont-fire-truck-alt'       => 'Fire-Truck-Alt' ),
        array( 'icofont icofont-fork-lift'       => 'Fork-Lift' ),
        array( 'icofont icofont-free-delivery'       => 'Free-Delivery' ),
        array( 'icofont icofont-golf-cart'       => 'Golf-Cart' ),
        array( 'icofont icofont-helicopter'       => 'Helicopter' ),
        array( 'icofont icofont-motor-bike'       => 'Motor-Bike' ),
        array( 'icofont icofont-motor-bike-alt'       => 'Motor-Bike-Alt' ),
        array( 'icofont icofont-motor-biker'       => 'Motor-Biker' ),
        array( 'icofont icofont-oil-truck'       => 'Oil-Truck' ),
        array( 'icofont icofont-police-car'       => 'Police-Car' ),
        array( 'icofont icofont-rickshaw'       => 'Rickshaw' ),
        array( 'icofont icofont-rocket-alt-1'       => 'Rocket-Alt-1' ),
        array( 'icofont icofont-rocket-alt-2'       => 'Rocket-Alt-2' ),
        array( 'icofont icofont-sail-boat'       => 'Sail-Boat' ),
        array( 'icofont icofont-scooter'       => 'Scooter' ),
        array( 'icofont icofont-sea-plane'       => 'Sea-Plane' ),
        array( 'icofont icofont-ship-alt'       => 'Ship-Alt' ),
        array( 'icofont icofont-speed-boat'       => 'Speed-Boat' ),
        array( 'icofont icofont-taxi'       => 'Taxi' ),
        array( 'icofont icofont-tow-truck'       => 'Tow-Truck' ),
        array( 'icofont icofont-tractor'       => 'Tractor' ),
        array( 'icofont icofont-traffic-light'       => 'Traffic-Light' ),
        array( 'icofont icofont-train-line'       => 'Train-Line' ),
        array( 'icofont icofont-train-steam'       => 'Train-Steam' ),
        array( 'icofont icofont-tram'       => 'Tram' ),
        array( 'icofont icofont-truck'       => 'Truck' ),
        array( 'icofont icofont-truck-alt'       => 'Truck-Alt' ),
        array( 'icofont icofont-truck-loaded'       => 'Truck-Loaded' ),
        array( 'icofont icofont-van'       => 'Van' ),
        array( 'icofont icofont-van-alt'       => 'Van-Alt' ),
        array( 'icofont icofont-yacht'       => 'Yacht' ),
        array( 'icofont icofont-5-star-hotel'       => '5-Star-Hotel' ),
        array( 'icofont icofont-anchor-alt'       => 'Anchor-Alt' ),
        array( 'icofont icofont-beach-bed'       => 'Beach-Bed' ),
        array( 'icofont icofont-camping-vest'       => 'Camping-Vest' ),
        array( 'icofont icofont-coconut-alt'       => 'Coconut-Alt' ),
        array( 'icofont icofont-direction-sign'       => 'Direction-Sign' ),
        array( 'icofont icofont-hill-side'       => 'Hill-Side' ),
        array( 'icofont icofont-island-alt'       => 'Island-Alt' ),
        array( 'icofont icofont-long-drive'       => 'Long-Drive' ),
        array( 'icofont icofont-map-pins'       => 'Map-Pins' ),
        array( 'icofont icofont-plane-ticket'       => 'Plane-Ticket' ),
        array( 'icofont icofont-sail-boat-alt-1'       => 'Sail-Boat-Alt-1' ),
        array( 'icofont icofont-sail-boat-alt-2'       => 'Sail-Boat-Alt-2' ),
        array( 'icofont icofont-sandals-female'       => 'Sandals-Female' ),
        array( 'icofont icofont-sandals-male'       => 'Sandals-Male' ),
        array( 'icofont icofont-travelling'       => 'Travelling' ),
        array( 'icofont icofont-breakdown'       => 'Breakdown' ),
        array( 'icofont icofont-celsius'       => 'Celsius' ),
        array( 'icofont icofont-clouds'       => 'Clouds' ),
        array( 'icofont icofont-cloudy'       => 'Cloudy' ),
        array( 'icofont icofont-compass-alt'       => 'Compass-Alt' ),
        array( 'icofont icofont-dust'       => 'Dust' ),
        array( 'icofont icofont-eclipse'       => 'Eclipse' ),
        array( 'icofont icofont-fahrenheit'       => 'Fahrenheit' ),
        array( 'icofont icofont-forest-fire'       => 'Forest-Fire' ),
        array( 'icofont icofont-full-night'       => 'Full-Night' ),
        array( 'icofont icofont-full-sunny'       => 'Full-Sunny' ),
        array( 'icofont icofont-hail'       => 'Hail' ),
        array( 'icofont icofont-hail-night'       => 'Hail-Night' ),
        array( 'icofont icofont-hail-rainy'       => 'Hail-Rainy' ),
        array( 'icofont icofont-hail-rainy-night'       => 'Hail-Rainy-Night' ),
        array( 'icofont icofont-hail-rainy-sunny'       => 'Hail-Rainy-Sunny' ),
        array( 'icofont icofont-hail-sunny'       => 'Hail-Sunny' ),
        array( 'icofont icofont-hail-thunder'       => 'Hail-Thunder' ),
        array( 'icofont icofont-hail-thunder-night'       => 'Hail-Thunder-Night' ),
        array( 'icofont icofont-hail-thunder-sunny'       => 'Hail-Thunder-Sunny' ),
        array( 'icofont icofont-hill'       => 'Hill' ),
        array( 'icofont icofont-hill-night'       => 'Hill-Night' ),
        array( 'icofont icofont-hill-sunny'       => 'Hill-Sunny' ),
        array( 'icofont icofont-hurricane'       => 'Hurricane' ),
        array( 'icofont icofont-island'       => 'Island' ),
        array( 'icofont icofont-meteor'       => 'Meteor' ),
        array( 'icofont icofont-night'       => 'Night' ),
        array( 'icofont icofont-rainy'       => 'Rainy' ),
        array( 'icofont icofont-rainy-night'       => 'Rainy-Night' ),
        array( 'icofont icofont-rainy-sunny'       => 'Rainy-Sunny' ),
        array( 'icofont icofont-rainy-thunder'       => 'Rainy-Thunder' ),
        array( 'icofont icofont-showy-night-hail'       => 'Showy-Night-Hail' ),
        array( 'icofont icofont-snow'       => 'Snow' ),
        array( 'icofont icofont-snow-temp'       => 'Snow-Temp' ),
        array( 'icofont icofont-snowy'       => 'Snowy' ),
        array( 'icofont icofont-snowy-hail'       => 'Snowy-Hail' ),
        array( 'icofont icofont-snowy-night'       => 'Snowy-Night' ),
        array( 'icofont icofont-snowy-night-rainy'       => 'Snowy-Night-Rainy' ),
        array( 'icofont icofont-snowy-rainy'       => 'Snowy-Rainy' ),
        array( 'icofont icofont-snowy-sunny'       => 'Snowy-Sunny' ),
        array( 'icofont icofont-snowy-sunny-hail'       => 'Snowy-Sunny-Hail' ),
        array( 'icofont icofont-snowy-sunny-rainy'       => 'Snowy-Sunny-Rainy' ),
        array( 'icofont icofont-snowy-thunder'       => 'Snowy-Thunder' ),
        array( 'icofont icofont-snowy-thunder-night'       => 'Snowy-Thunder-Night' ),
        array( 'icofont icofont-snowy-thunder-sunny'       => 'Snowy-Thunder-Sunny' ),
        array( 'icofont icofont-snowy-windy'       => 'Snowy-Windy' ),
        array( 'icofont icofont-snowy-windy-night'       => 'Snowy-Windy-Night' ),
        array( 'icofont icofont-snowy-windy-sunny'       => 'Snowy-Windy-Sunny' ),
        array( 'icofont icofont-sun-alt'       => 'Sun-Alt' ),
        array( 'icofont icofont-sun-rise'       => 'Sun-Rise' ),
        array( 'icofont icofont-sun-set'       => 'Sun-Set' ),
        array( 'icofont icofont-sunny'       => 'Sunny' ),
        array( 'icofont icofont-sunny-day-temp'       => 'Sunny-Day-Temp' ),
        array( 'icofont icofont-thermometer'       => 'Thermometer' ),
        array( 'icofont icofont-thinder-light'       => 'Thinder-Light' ),
        array( 'icofont icofont-tornado'       => 'Tornado' ),
        array( 'icofont icofont-umbrella-alt'       => 'Umbrella-Alt' ),
        array( 'icofont icofont-volcano'       => 'Volcano' ),
        array( 'icofont icofont-wave'       => 'Wave' ),
        array( 'icofont icofont-wind'       => 'Wind' ),
        array( 'icofont icofont-wind-scale-0'       => 'Wind-Scale-0' ),
        array( 'icofont icofont-wind-scale-1'       => 'Wind-Scale-1' ),
        array( 'icofont icofont-wind-scale-10'       => 'Wind-Scale-10' ),
        array( 'icofont icofont-wind-scale-11'       => 'Wind-Scale-11' ),
        array( 'icofont icofont-wind-scale-12'       => 'Wind-Scale-12' ),
        array( 'icofont icofont-wind-scale-2'       => 'Wind-Scale-2' ),
        array( 'icofont icofont-wind-scale-3'       => 'Wind-Scale-3' ),
        array( 'icofont icofont-wind-scale-4'       => 'Wind-Scale-4' ),
        array( 'icofont icofont-wind-scale-5'       => 'Wind-Scale-5' ),
        array( 'icofont icofont-wind-scale-6'       => 'Wind-Scale-6' ),
        array( 'icofont icofont-wind-scale-7'       => 'Wind-Scale-7' ),
        array( 'icofont icofont-wind-scale-8'       => 'Wind-Scale-8' ),
        array( 'icofont icofont-wind-scale-9'       => 'Wind-Scale-9' ),
        array( 'icofont icofont-wind-waves'       => 'Wind-Waves' ),
        array( 'icofont icofont-windy'       => 'Windy' ),
        array( 'icofont icofont-windy-hail'       => 'Windy-Hail' ),
        array( 'icofont icofont-windy-night'       => 'Windy-Night' ),
        array( 'icofont icofont-windy-raining'       => 'Windy-Raining' ),
        array( 'icofont icofont-windy-sunny'       => 'Windy-Sunny' ),
        array( 'icofont icofont-windy-thunder'       => 'Windy-Thunder' ),
        array( 'icofont icofont-windy-thunder-raining'       => 'Windy-Thunder-Raining' ),
        array( 'icofont icofont-addons'       => 'Addons' ),
        array( 'icofont icofont-address-book'       => 'Address-Book' ),
        array( 'icofont icofont-adjust'       => 'Adjust' ),
        array( 'icofont icofont-alarm'       => 'Alarm' ),
        array( 'icofont icofont-anchor'       => 'Anchor' ),
        array( 'icofont icofont-archive'       => 'Archive' ),
        array( 'icofont icofont-at'       => 'At' ),
        array( 'icofont icofont-attachment'       => 'Attachment' ),
        array( 'icofont icofont-audio'       => 'Audio' ),
        array( 'icofont icofont-auto-mobile'       => 'Auto-mobile' ),
        array( 'icofont icofont-automation'       => 'Automation' ),
        array( 'icofont icofont-baby'       => 'Baby' ),
        array( 'icofont icofont-badge'       => 'Badge' ),
        array( 'icofont icofont-bag'       => 'Bag' ),
        array( 'icofont icofont-ban'       => 'Ban' ),
        array( 'icofont icofont-bank'       => 'Bank' ),
        array( 'icofont icofont-bar-code'       => 'Bar-Code' ),
        array( 'icofont icofont-bars'       => 'Bars' ),
        array( 'icofont icofont-battery-empty'       => 'Battery-Empty' ),
        array( 'icofont icofont-battery-full'       => 'Battery-Full' ),
        array( 'icofont icofont-battery-half'       => 'Battery-Half' ),
        array( 'icofont icofont-battery-low'       => 'Battery-Low' ),
        array( 'icofont icofont-beach'       => 'Beach' ),
        array( 'icofont icofont-beaker'       => 'Beaker' ),
        array( 'icofont icofont-bear'       => 'Bear' ),
        array( 'icofont icofont-beard'       => 'Beard' ),
        array( 'icofont icofont-bed'       => 'Bed' ),
        array( 'icofont icofont-bell'       => 'Bell' ),
        array( 'icofont icofont-beverage'       => 'Beverage' ),
        array( 'icofont icofont-bicycle'       => 'Bicycle' ),
        array( 'icofont icofont-bill'       => 'Bill' ),
        array( 'icofont icofont-bin'       => 'Bin' ),
        array( 'icofont icofont-binary'       => 'Binary' ),
        array( 'icofont icofont-binoculars'       => 'Binoculars' ),
        array( 'icofont icofont-bird'       => 'Bird' ),
        array( 'icofont icofont-birds'       => 'Birds' ),
        array( 'icofont icofont-black-board'       => 'Black-Board' ),
        array( 'icofont icofont-bluetooth'       => 'Bluetooth' ),
        array( 'icofont icofont-bolt'       => 'Bolt' ),
        array( 'icofont icofont-bomb'       => 'Bomb' ),
        array( 'icofont icofont-book'       => 'Book' ),
        array( 'icofont icofont-book-mark'       => 'Book-Mark' ),
        array( 'icofont icofont-boot'       => 'Boot' ),
        array( 'icofont icofont-box'       => 'Box' ),
        array( 'icofont icofont-brain'       => 'Brain' ),
        array( 'icofont icofont-briefcase'       => 'Briefcase' ),
        array( 'icofont icofont-broken'       => 'Broken' ),
        array( 'icofont icofont-bucket'       => 'Bucket' ),
        array( 'icofont icofont-bucket1'       => 'Bucket1' ),
        array( 'icofont icofont-bucket2'       => 'Bucket2' ),
        array( 'icofont icofont-bug'       => 'Bug' ),
        array( 'icofont icofont-building'       => 'Building' ),
        array( 'icofont icofont-bullet'       => 'Bullet' ),
        array( 'icofont icofont-bullhorn'       => 'Bullhorn' ),
        array( 'icofont icofont-bullseye'       => 'Bullseye' ),
        array( 'icofont icofont-bus'       => 'Bus' ),
        array( 'icofont icofont-butterfly'       => 'Butterfly' ),
        array( 'icofont icofont-cab'       => 'Cab' ),
        array( 'icofont icofont-calculator'       => 'Calculator' ),
        array( 'icofont icofont-calendar'       => 'Calendar' ),
        array( 'icofont icofont-camera'       => 'Camera' ),
        array( 'icofont icofont-camera-alt'       => 'Camera-Alt' ),
        array( 'icofont icofont-car'       => 'Car' ),
        array( 'icofont icofont-card'       => 'Card' ),
        array( 'icofont icofont-cart'       => 'Cart' ),
        array( 'icofont icofont-cc'       => 'Cc' ),
        array( 'icofont icofont-certificate'       => 'Certificate' ),
        array( 'icofont icofont-charging'       => 'Charging' ),
        array( 'icofont icofont-chat'       => 'Chat' ),
        array( 'icofont icofont-check'       => 'Check' ),
        array( 'icofont icofont-check-alt'       => 'Check-Alt' ),
        array( 'icofont icofont-check-circled'       => 'Check-Circled' ),
        array( 'icofont icofont-checked'       => 'Checked' ),
        array( 'icofont icofont-children-care'       => 'Children-Care' ),
        array( 'icofont icofont-clock-time'       => 'Clock-Time' ),
        array( 'icofont icofont-close'       => 'Close' ),
        array( 'icofont icofont-close-circled'       => 'Close-Circled' ),
        array( 'icofont icofont-close-line'       => 'Close-Line' ),
        array( 'icofont icofont-close-line-circled'       => 'Close-Line-Circled' ),
        array( 'icofont icofont-close-line-squared'       => 'Close-Line-Squared' ),
        array( 'icofont icofont-close-line-squared-alt'       => 'Close-Line-Squared-Alt' ),
        array( 'icofont icofont-close-squared'       => 'Close-Squared' ),
        array( 'icofont icofont-close-squared-alt'       => 'Close-Squared-Alt' ),
        array( 'icofont icofont-cloud'       => 'Cloud' ),
        array( 'icofont icofont-cloud-download'       => 'Cloud-Download' ),
        array( 'icofont icofont-cloud-refresh'       => 'Cloud-Refresh' ),
        array( 'icofont icofont-cloud-upload'       => 'Cloud-Upload' ),
        array( 'icofont icofont-code'       => 'Code' ),
        array( 'icofont icofont-code-not-allowed'       => 'Code-Not-Allowed' ),
        array( 'icofont icofont-coffee-cup'       => 'Coffee-Cup' ),
        array( 'icofont icofont-comment'       => 'Comment' ),
        array( 'icofont icofont-compass'       => 'Compass' ),
        array( 'icofont icofont-computer'       => 'Computer' ),
        array( 'icofont icofont-connection'       => 'Connection' ),
        array( 'icofont icofont-console'       => 'Console' ),
        array( 'icofont icofont-contacts'       => 'Contacts' ),
        array( 'icofont icofont-contrast'       => 'Contrast' ),
        array( 'icofont icofont-copy'       => 'Copy' ),
        array( 'icofont icofont-copyright'       => 'Copyright' ),
        array( 'icofont icofont-credit-card'       => 'Credit-Card' ),
        array( 'icofont icofont-crop'       => 'Crop' ),
        array( 'icofont icofont-crown'       => 'Crown' ),
        array( 'icofont icofont-cube'       => 'Cube' ),
        array( 'icofont icofont-cubes'       => 'Cubes' ),
        array( 'icofont icofont-culinary'       => 'Culinary' ),
        array( 'icofont icofont-dashboard'       => 'Dashboard' ),
        array( 'icofont icofont-dashboard-web'       => 'Dashboard-Web' ),
        array( 'icofont icofont-data'       => 'Data' ),
        array( 'icofont icofont-database'       => 'Database' ),
        array( 'icofont icofont-database-add'       => 'Database-Add' ),
        array( 'icofont icofont-database-locked'       => 'Database-Locked' ),
        array( 'icofont icofont-database-remove'       => 'Database-Remove' ),
        array( 'icofont icofont-delete'       => 'Delete' ),
        array( 'icofont icofont-diamond'       => 'Diamond' ),
        array( 'icofont icofont-dice'       => 'Dice' ),
        array( 'icofont icofont-disabled'       => 'Disabled' ),
        array( 'icofont icofont-disc'       => 'Disc' ),
        array( 'icofont icofont-diskette'       => 'Diskette' ),
        array( 'icofont icofont-document-folder'       => 'Document-Folder' ),
        array( 'icofont icofont-download'       => 'Download' ),
        array( 'icofont icofont-download-alt'       => 'Download-Alt' ),
        array( 'icofont icofont-downloaded'       => 'Downloaded' ),
        array( 'icofont icofont-earth'       => 'Earth' ),
        array( 'icofont icofont-ebook'       => 'Ebook' ),
        array( 'icofont icofont-edit'       => 'Edit' ),
        array( 'icofont icofont-eject'       => 'Eject' ),
        array( 'icofont icofont-email'       => 'Email' ),
        array( 'icofont icofont-envelope'       => 'Envelope' ),
        array( 'icofont icofont-envelope-open'       => 'Envelope-Open' ),
        array( 'icofont icofont-eraser'       => 'Eraser' ),
        array( 'icofont icofont-error'       => 'Error' ),
        array( 'icofont icofont-exchange'       => 'Bathtub' ),
        array( 'icofont icofont-exclamation'       => 'Exclamation' ),
        array( 'icofont icofont-exclamation-circle'       => 'Exclamation-Circle' ),
        array( 'icofont icofont-exclamation-square'       => 'Exclamation-Square' ),
        array( 'icofont icofont-exclamation-tringle'       => 'Exclamation-Tringle' ),
        array( 'icofont icofont-exit'       => 'Exit' ),
        array( 'icofont icofont-expand'       => 'Expand' ),
        array( 'icofont icofont-external'       => 'External' ),
        array( 'icofont icofont-external-link'       => 'External-Link' ),
        array( 'icofont icofont-eye'       => 'Eye' ),
        array( 'icofont icofont-eye-blocked'       => 'Eye-Blocked' ),
        array( 'icofont icofont-eye-dropper'       => 'Eye-Dropper' ),
        array( 'icofont icofont-favourite'       => 'Favourite' ),
        array( 'icofont icofont-fax'       => 'Fax' ),
        array( 'icofont icofont-female'       => 'Female' ),
        array( 'icofont icofont-file'       => 'File' ),
        array( 'icofont icofont-film'       => 'Film' ),
        array( 'icofont icofont-filter'       => 'Filter' ),
        array( 'icofont icofont-fire'       => 'Fire' ),
        array( 'icofont icofont-fire-burn'       => 'Fire-Burn' ),
        array( 'icofont icofont-fire-extinguisher'       => 'Fire-Extinguisher' ),
        array( 'icofont icofont-first-aid'       => 'First-Aid' ),
        array( 'icofont icofont-flag'       => 'Flag' ),
        array( 'icofont icofont-flag-alt-1'       => 'Flag-Alt-1' ),
        array( 'icofont icofont-flag-alt-2'       => 'Flag-Alt-2' ),
        array( 'icofont icofont-flash'       => 'Flash' ),
        array( 'icofont icofont-flash-light'       => 'Flash-Light' ),
        array( 'icofont icofont-flask'       => 'Flask' ),
        array( 'icofont icofont-focus'       => 'Focus' ),
        array( 'icofont icofont-folder'       => 'Folder' ),
        array( 'icofont icofont-folder-open'       => 'Folder-Open' ),
        array( 'icofont icofont-foot-print'       => 'Foot-Print' ),
        array( 'icofont icofont-football'       => 'Football' ),
        array( 'icofont icofont-football-american'       => 'Football-American' ),
        array( 'icofont icofont-game-console'       => 'Game-Console' ),
        array( 'icofont icofont-game-pad'       => 'Game-Pad' ),
        array( 'icofont icofont-gavel'       => 'Gavel' ),
        array( 'icofont icofont-gear'       => 'Gear' ),
        array( 'icofont icofont-gears'       => 'Gears' ),
        array( 'icofont icofont-gift'       => 'Gift' ),
        array( 'icofont icofont-glass'       => 'Glass' ),
        array( 'icofont icofont-globe'       => 'Globe' ),
        array( 'icofont icofont-graduate'       => 'Graduate' ),
        array( 'icofont icofont-graffiti'       => 'Graffiti' ),
        array( 'icofont icofont-grocery'       => 'Grocery' ),
        array( 'icofont icofont-group'       => 'Group' ),
        array( 'icofont icofont-hammer'       => 'Hammer' ),
        array( 'icofont icofont-hand'       => 'Hand' ),
        array( 'icofont icofont-hanger'       => 'Hanger' ),
        array( 'icofont icofont-hard-disk'       => 'Hard-Disk' ),
        array( 'icofont icofont-headphone'       => 'Headphone' ),
        array( 'icofont icofont-heart'       => 'Heart' ),
        array( 'icofont icofont-heart-beat'       => 'Heart-Beat' ),
        array( 'icofont icofont-history'       => 'History' ),
        array( 'icofont icofont-home'       => 'Home' ),
        array( 'icofont icofont-horn'       => 'Horn' ),
        array( 'icofont icofont-hotel'       => 'Hotel' ),
        array( 'icofont icofont-hour-glass'       => 'Hour-Glass' ),
        array( 'icofont icofont-id'       => 'Id' ),
        array( 'icofont icofont-image'       => 'Image' ),
        array( 'icofont icofont-inbox'       => 'Inbox' ),
        array( 'icofont icofont-infinite'       => 'Infinite' ),
        array( 'icofont icofont-info'       => 'Info' ),
        array( 'icofont icofont-info-circle'       => 'Info-Circle' ),
        array( 'icofont icofont-info-square'       => 'Info-Square' ),
        array( 'icofont icofont-institution'       => 'Institution' ),
        array( 'icofont icofont-interface'       => 'Interface' ),
        array( 'icofont icofont-invisible'       => 'Invisible' ),
        array( 'icofont icofont-italic'       => 'Italic' ),
        array( 'icofont icofont-jacket'       => 'Jacket' ),
        array( 'icofont icofont-jar'       => 'Jar' ),
        array( 'icofont icofont-jewlery'       => 'Jewlery' ),
        array( 'icofont icofont-karate'       => 'Karate' ),
        array( 'icofont icofont-key'       => 'Key' ),
        array( 'icofont icofont-key-hole'       => 'Key-Hole' ),
        array( 'icofont icofont-keyboard'       => 'Keyboard' ),
        array( 'icofont icofont-kid'       => 'Kid' ),
        array( 'icofont icofont-label'       => 'Label' ),
        array( 'icofont icofont-lamp'       => 'Lamp' ),
        array( 'icofont icofont-laptop'       => 'Laptop' ),
        array( 'icofont icofont-layers'       => 'Layers' ),
        array( 'icofont icofont-layout'       => 'Layout' ),
        array( 'icofont icofont-leaf'       => 'Leaf' ),
        array( 'icofont icofont-leaflet'       => 'Leaflet' ),
        array( 'icofont icofont-learn'       => 'Learn' ),
        array( 'icofont icofont-legal'       => 'Legal' ),
        array( 'icofont icofont-lego'       => 'Lego' ),
        array( 'icofont icofont-lemon'       => 'Lemon' ),
        array( 'icofont icofont-lens'       => 'Lens' ),
        array( 'icofont icofont-letter'       => 'Letter' ),
        array( 'icofont icofont-letterbox'       => 'Letterbox' ),
        array( 'icofont icofont-library'       => 'Library' ),
        array( 'icofont icofont-license'       => 'License' ),
        array( 'icofont icofont-life-bouy'       => 'Life-Bouy' ),
        array( 'icofont icofont-life-buoy'       => 'Life-Buoy' ),
        array( 'icofont icofont-life-jacket'       => 'Life-Jacket' ),
        array( 'icofont icofont-life-ring'       => 'Life-Ring' ),
        array( 'icofont icofont-light-bulb'       => 'Light-Bulb' ),
        array( 'icofont icofont-lighter'       => 'Lighter' ),
        array( 'icofont icofont-lightning-ray'       => 'Lightning-Ray' ),
        array( 'icofont icofont-like'       => 'Like' ),
        array( 'icofont icofont-link'       => 'Link' ),
        array( 'icofont icofont-live-support'       => 'Live-Support' ),
        array( 'icofont icofont-location-arrow'       => 'Location-Arrow' ),
        array( 'icofont icofont-location-pin'       => 'Location-Pin' ),
        array( 'icofont icofont-lock'       => 'Lock' ),
        array( 'icofont icofont-login'       => 'Login' ),
        array( 'icofont icofont-logout'       => 'Logout' ),
        array( 'icofont icofont-lollipop'       => 'Lollipop' ),
        array( 'icofont icofont-look'       => 'Look' ),
        array( 'icofont icofont-loop'       => 'Loop' ),
        array( 'icofont icofont-luggage'       => 'Luggage' ),
        array( 'icofont icofont-lunch'       => 'Lunch' ),
        array( 'icofont icofont-lungs'       => 'Lungs' ),
        array( 'icofont icofont-magic'       => 'Magic' ),
        array( 'icofont icofont-magic-alt'       => 'Magic-Alt' ),
        array( 'icofont icofont-magnet'       => 'Magnet' ),
        array( 'icofont icofont-mail'       => 'Mail' ),
        array( 'icofont icofont-mail-box'       => 'Mail-Box' ),
        array( 'icofont icofont-male'       => 'Male' ),
        array( 'icofont icofont-map'       => 'Map' ),
        array( 'icofont icofont-math'       => 'Math' ),
        array( 'icofont icofont-maximize'       => 'Maximize' ),
        array( 'icofont icofont-measure'       => 'Measure' ),
        array( 'icofont icofont-medal'       => 'Medal' ),
        array( 'icofont icofont-medical'       => 'Medical' ),
        array( 'icofont icofont-medicine'       => 'Medicine' ),
        array( 'icofont icofont-mega-phone'       => 'Mega-Phone' ),
        array( 'icofont icofont-memorial'       => 'Memorial' ),
        array( 'icofont icofont-memory-card'       => 'Memory-Card' ),
        array( 'icofont icofont-mic'       => 'Mic' ),
        array( 'icofont icofont-mic-mute'       => 'Mic-Mute' ),
        array( 'icofont icofont-micro-chip'       => 'Micro-Chip' ),
        array( 'icofont icofont-microphone'       => 'Microphone' ),
        array( 'icofont icofont-microscope'       => 'Microscope' ),
        array( 'icofont icofont-military'       => 'Military' ),
        array( 'icofont icofont-mill'       => 'Mill' ),
        array( 'icofont icofont-minus'       => 'Minus' ),
        array( 'icofont icofont-minus-circle'       => 'Minus-Circle' ),
        array( 'icofont icofont-minus-square'       => 'Minus-Square' ),
        array( 'icofont icofont-mobile-phone'       => 'Mobile-Phone' ),
        array( 'icofont icofont-molecule'       => 'Molecule' ),
        array( 'icofont icofont-money'       => 'Money' ),
        array( 'icofont icofont-moon'       => 'Moon' ),
        array( 'icofont icofont-mop'       => 'Mop' ),
        array( 'icofont icofont-muffin'       => 'Muffin' ),
        array( 'icofont icofont-music'       => 'Music' ),
        array( 'icofont icofont-music-alt'       => 'Music-Alt' ),
        array( 'icofont icofont-music-notes'       => 'Music-Notes' ),
        array( 'icofont icofont-mustache'       => 'Mustache' ),
        array( 'icofont icofont-mute-volume'       => 'Mute-Volume' ),
        array( 'icofont icofont-navigation'       => 'Navigation' ),
        array( 'icofont icofont-navigation-menu'       => 'Navigation-Menu' ),
        array( 'icofont icofont-network'       => 'Network' ),
        array( 'icofont icofont-network-tower'       => 'Network-Tower' ),
        array( 'icofont icofont-news'       => 'News' ),
        array( 'icofont icofont-newspaper'       => 'Newspaper' ),
        array( 'icofont icofont-no-smoking'       => 'No-Smoking' ),
        array( 'icofont icofont-not-allowed'       => 'Not-Allowed' ),
        array( 'icofont icofont-notebook'       => 'Notebook' ),
        array( 'icofont icofont-notepad'       => 'Notepad' ),
        array( 'icofont icofont-notification'       => 'Notification' ),
        array( 'icofont icofont-numbered'       => 'Numbered' ),
        array( 'icofont icofont-opposite'       => 'Opposite' ),
        array( 'icofont icofont-optic'       => 'Optic' ),
        array( 'icofont icofont-options'       => 'Options' ),
        array( 'icofont icofont-package'       => 'Package' ),
        array( 'icofont icofont-page'       => 'Page' ),
        array( 'icofont icofont-paint'       => 'Paint' ),
        array( 'icofont icofont-paper-plane'       => 'Paper-Plane' ),
        array( 'icofont icofont-paperclip'       => 'Paperclip' ),
        array( 'icofont icofont-papers'       => 'Papers' ),
        array( 'icofont icofont-paw'       => 'Paw' ),
        array( 'icofont icofont-pay'       => 'Pay' ),
        array( 'icofont icofont-pen'       => 'Pen' ),
        array( 'icofont icofont-pencil'       => 'Pencil' ),
        array( 'icofont icofont-penguin-linux'       => 'Penguin-Linux' ),
        array( 'icofont icofont-pestle'       => 'Pestle' ),
        array( 'icofont icofont-phone'       => 'Phone' ),
        array( 'icofont icofont-phone-circle'       => 'Phone-Circle' ),
        array( 'icofont icofont-picture'       => 'Picture' ),
        array( 'icofont icofont-pie'       => 'Pie' ),
        array( 'icofont icofont-pine'       => 'Pine' ),
        array( 'icofont icofont-pixels'       => 'Pixels' ),
        array( 'icofont icofont-play'       => 'Play' ),
        array( 'icofont icofont-plugin'       => 'Plugin' ),
        array( 'icofont icofont-plus'       => 'Plus' ),
        array( 'icofont icofont-plus-circle'       => 'Plus-Circle' ),
        array( 'icofont icofont-plus-square'       => 'Plus-Square' ),
        array( 'icofont icofont-polygonal'       => 'Polygonal' ),
        array( 'icofont icofont-power'       => 'Power' ),
        array( 'icofont icofont-presentation'       => 'Presentation' ),
        array( 'icofont icofont-price'       => 'Price' ),
        array( 'icofont icofont-print'       => 'Print' ),
        array( 'icofont icofont-puzzle'       => 'Puzzle' ),
        array( 'icofont icofont-qr-code'       => 'Qr-Code' ),
        array( 'icofont icofont-queen'       => 'Queen' ),
        array( 'icofont icofont-question'       => 'Question' ),
        array( 'icofont icofont-question-circle'       => 'Question-Circle' ),
        array( 'icofont icofont-question-square'       => 'Question-Square' ),
        array( 'icofont icofont-quote-left'       => 'Quote-Left' ),
        array( 'icofont icofont-quote-right'       => 'Quote-Right' ),
        array( 'icofont icofont-radio'       => 'Radio' ),
        array( 'icofont icofont-random'       => 'Random' ),
        array( 'icofont icofont-recycle'       => 'Recycle' ),
        array( 'icofont icofont-refresh'       => 'Refresh' ),
        array( 'icofont icofont-repair'       => 'Repair' ),
        array( 'icofont icofont-reply'       => 'Reply' ),
        array( 'icofont icofont-reply-all'       => 'Reply-All' ),
        array( 'icofont icofont-resize'       => 'Resize' ),
        array( 'icofont icofont-responsive'       => 'Responsive' ),
        array( 'icofont icofont-retweet'       => 'Retweet' ),
        array( 'icofont icofont-road'       => 'Road' ),
        array( 'icofont icofont-robot'       => 'Robot' ),
        array( 'icofont icofont-rocket'       => 'Rocket' ),
        array( 'icofont icofont-royal'       => 'Bathtub' ),
        array( 'icofont icofont-rss-feed'       => 'Bathtub' ),
        array( 'icofont icofont-safety'       => 'Bathtub' ),
        array( 'icofont icofont-sale-discount'       => 'Bathtub' ),
        array( 'icofont icofont-satellite'       => 'Satellite' ),
        array( 'icofont icofont-send-mail'       => 'Send-Mail' ),
        array( 'icofont icofont-server'       => 'Server' ),
        array( 'icofont icofont-settings'       => 'Settings' ),
        array( 'icofont icofont-share'       => 'Share' ),
        array( 'icofont icofont-share-alt'       => 'Share-Alt' ),
        array( 'icofont icofont-share-boxed'       => 'Share-Boxed' ),
        array( 'icofont icofont-shield'       => 'Shield' ),
        array( 'icofont icofont-ship'       => 'Ship' ),
        array( 'icofont icofont-shopping-cart'       => 'Shopping-Cart' ),
        array( 'icofont icofont-sign-in'       => 'Sign-In' ),
        array( 'icofont icofont-sign-out'       => 'Sign-Out' ),
        array( 'icofont icofont-signal'       => 'Signal' ),
        array( 'icofont icofont-site-map'       => 'Site-Map' ),
        array( 'icofont icofont-smart-phone'       => 'Smart-Phone' ),
        array( 'icofont icofont-soccer'       => 'Soccer' ),
        array( 'icofont icofont-sort'       => 'Sort' ),
        array( 'icofont icofont-sort-alt'       => 'Sort-Alt' ),
        array( 'icofont icofont-space'       => 'Space' ),
        array( 'icofont icofont-spanner'       => 'Spanner' ),
        array( 'icofont icofont-speech-comments'       => 'Speech-Comments' ),
        array( 'icofont icofont-speed-meter'       => 'Speed-Meter' ),
        array( 'icofont icofont-spinner'       => 'Spinner' ),
        array( 'icofont icofont-spinner-alt-1'       => 'Spinner-Alt-1' ),
        array( 'icofont icofont-spinner-alt-2'       => 'Spinner-Alt-2' ),
        array( 'icofont icofont-spinner-alt-3'       => 'Spinner-Alt-3' ),
        array( 'icofont icofont-spinner-alt-4'       => 'Spinner-Alt-4' ),
        array( 'icofont icofont-spinner-alt-5'       => 'Spinner-Alt-5' ),
        array( 'icofont icofont-spinner-alt-6'       => 'Spinner-Alt-6' ),
        array( 'icofont icofont-spreadsheet'       => 'Spreadsheet' ),
        array( 'icofont icofont-square'       => 'Square' ),
        array( 'icofont icofont-ssl-security'       => 'Ssl-Security' ),
        array( 'icofont icofont-star'       => 'Star' ),
        array( 'icofont icofont-star-alt-1'       => 'Star-Alt-1' ),
        array( 'icofont icofont-star-alt-2'       => 'Star-Alt-2' ),
        array( 'icofont icofont-street-view'       => 'Street-View' ),
        array( 'icofont icofont-sun'       => 'Sun' ),
        array( 'icofont icofont-support-faq'       => 'Support-Faq' ),
        array( 'icofont icofont-tack-pin'       => 'Tack-Pin' ),
        array( 'icofont icofont-tag'       => 'Tag' ),
        array( 'icofont icofont-tags'       => 'Tags' ),
        array( 'icofont icofont-tasks'       => 'Tasks' ),
        array( 'icofont icofont-telephone'       => 'Telephone' ),
        array( 'icofont icofont-telescope'       => 'Telescope' ),
        array( 'icofont icofont-terminal'       => 'Terminal' ),
        array( 'icofont icofont-thumbs-down'       => 'Thumbs-Down' ),
        array( 'icofont icofont-thumbs-up'       => 'Thumbs-Up' ),
        array( 'icofont icofont-tick-boxed'       => 'Tick-Boxed' ),
        array( 'icofont icofont-tick-mark'       => 'Tick-Mark' ),
        array( 'icofont icofont-ticket'       => 'Ticket' ),
        array( 'icofont icofont-tie'       => 'Tie' ),
        array( 'icofont icofont-toggle-off'       => 'Toggle-Off' ),
        array( 'icofont icofont-toggle-on'       => 'Toggle-On' ),
        array( 'icofont icofont-tools'       => 'Tools' ),
        array( 'icofont icofont-transparent'       => 'Transparent' ),
        array( 'icofont icofont-tree'       => 'Tree' ),
        array( 'icofont icofont-umbrella'       => 'Umbrella' ),
        array( 'icofont icofont-unlock'       => 'Unlock' ),
        array( 'icofont icofont-unlocked'       => 'Unlocked' ),
        array( 'icofont icofont-upload'       => 'Upload' ),
        array( 'icofont icofont-upload-alt'       => 'Upload-Alt' ),
        array( 'icofont icofont-usb'       => 'Usb' ),
        array( 'icofont icofont-usb-drive'       => 'Usb-Drive' ),
        array( 'icofont icofont-vector-path'       => 'Vector-Path' ),
        array( 'icofont icofont-verification-check'       => 'Verification-Check' ),
        array( 'icofont icofont-video'       => 'Video' ),
        array( 'icofont icofont-video-clapper'       => 'Video-Clapper' ),
        array( 'icofont icofont-volume-down'       => 'Volume-Down' ),
        array( 'icofont icofont-volume-off'       => 'Volume-Off' ),
        array( 'icofont icofont-volume-up'       => 'Volume-Up' ),
        array( 'icofont icofont-wall'       => 'Wall' ),
        array( 'icofont icofont-wall-clock'       => 'Wall-Clock' ),
        array( 'icofont icofont-wallet'       => 'Wallet' ),
        array( 'icofont icofont-warning'       => 'Warning' ),
        array( 'icofont icofont-warning-alt'       => 'Warning-Alt' ),
        array( 'icofont icofont-water-drop'       => 'Water-Drop' ),
        array( 'icofont icofont-web'       => 'Web' ),
        array( 'icofont icofont-wheelchair'       => 'Wheelchair' ),
        array( 'icofont icofont-wifi'       => 'WiFi' ),
        array( 'icofont icofont-wifi-alt'       => 'WiFi-Alt' ),
        array( 'icofont icofont-world'       => 'World' ),
        array( 'icofont icofont-zigzag'       => 'Zigzag' ),
        array( 'icofont icofont-zipped'       => 'Zipped' ),
  );
  return array_merge( $icons, $icofont_icons );
}
add_filter( 'vc_iconpicker-type-icofont', 'radiantthemes_iconpicker_type_icofont' );
