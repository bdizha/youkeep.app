<?php

use App\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    protected $photoCovers = [
        'https://pmcfootwearnews.files.wordpress.com/2019/03/031119-fn-insights-afterpay-revolve-popup-e1552489001960.jpeg?w=768&h=480&crop=1',
        'https://cdn-yotpo-images-production.yotpo.com/Account/410899/115923153/medium_square.jpg?1587702632',
        'https://www.fantasticfurniture.com.au/blog/wp-content/uploads/2018/04/Creating-Your-Perfect-Bedroom_01.jpg',
        'https://www.fantasticfurniture.com.au/blog/wp-content/uploads/2015/12/1.Header.jpg',
        'https://www.fantasticfurniture.com.au/blog/wp-content/uploads/2015/12/4.ColourTheirWorld.jpg',
        'https://www.fantasticfurniture.com.au/blog/wp-content/uploads/2015/12/9.Footer.jpg',
        'https://cdn.shopify.com/s/files/1/0898/5824/files/Collection_May_Prove-It_Black_1240x380_105d76bc-f4dc-4aed-a09f-1de66062f989.jpg?v=1588806848',
        'https://www.fantasticfurniture.com.au/medias/PINDIN5PCOP6-1-LIF-CONTAINER-original-FantasticFurniture-WF-Product-Detail?context=bWFzdGVyfGltYWdlcy9QSU5ESU41UENPUDZfMXwxMTQxMTB8aW1hZ2UvanBlZ3xpbWFnZXMvUElORElONVBDT1A2XzEvaGMwL2g0MC85MDY5MjQ2MDg3MTk4LmpwZ3w5MzFkNmI1Y2RkYzFhN2YxZTRmNGVjZjU5ODczYTk4ZjcwMDAxZDhhZDEwNWFiNDAyOTM4YzhlMzg3NmUzMDAw',
        'https://www.fantasticfurniture.com.au/medias/VEODIN3PC-1-LIF-CONTAINER-original-FantasticFurniture-WF-Product-Zoom?context=bWFzdGVyfGltYWdlcy9WRU9ESU4zUENfMXwxNjUxNjZ8aW1hZ2UvanBlZ3xpbWFnZXMvVkVPRElOM1BDXzEvaGZiL2g5OC85MjI0MTI5MTE4MjM4LmpwZ3w1YzBjZDdmNDBlYzBhMGFkNzljNmM2NzBhNTFmM2E0M2Q3NDFiYzE5NjhmNDlhM2U3ZDQ3YzNkMGY4ODk1NDU1',
        'https://www.fantasticfurniture.com.au/medias/SUMMANSGLOOOPLCMUL-LIF-CONTAINER-original-FantasticFurniture-WF-Product-Zoom?context=bWFzdGVyfGltYWdlcy9TVU1NQU5TR0xPT09QTENNVUx8MzAzODk4fGltYWdlL2pwZWd8aW1hZ2VzL1NVTU1BTlNHTE9PT1BMQ01VTC9oNTcvaDQyLzkwNDI2NjY2ODQ0NDYuanBnfDJhYTZmNDc2MWNiYTdjYmI4MDMwZDUxZTdiY2Y2NWFiYzIyY2IzODZjZmMwMTQwZGZkZTQzMzFkMDBjY2MyYTQ',
        'https://www.fantasticfurniture.com.au/medias/TBEMANSGLOOOPLRMUL-LIF-CONTAINER-original-FantasticFurniture-WF-Product-Zoom?context=bWFzdGVyfGltYWdlcy9UQkVNQU5TR0xPT09QTFJNVUx8MzcwODk1fGltYWdlL2pwZWd8aW1hZ2VzL1RCRU1BTlNHTE9PT1BMUk1VTC9oNDUvaDBjLzkwNzg5Nzk4NTQzNjYuanBnfDM1OGI2OWY0ZGQ3YjU5YjYzYjM3MTM4ZjUyOTdkZmJjYmQzNmJhODI2NWU5ZTc1OTg1MmU4NzBhMTJlNDAxZTE',
        'https://www.fantasticfurniture.com.au/medias/PHOSET4PCOOOALUGUN-LIF-CONTAINER-original-FantasticFurniture-WF-Product-Zoom?context=bWFzdGVyfGltYWdlcy9QSE9TRVQ0UENPT09BTFVHVU58MzYxNjg0fGltYWdlL2pwZWd8aW1hZ2VzL1BIT1NFVDRQQ09PT0FMVUdVTi9oZDUvaDVjLzkxODc0Mzc5Njk0MzguanBnfDhhOGU5NDA4NmE2YTllZTE1NDljYjZkMzE5ZjAxOTVlNzcxOTQ2NWQwMGI1MzRjOTI3NmJmMGRkYTk4NzcxYWQ',
        'https://www.fantasticfurniture.com.au/medias/PHOSET4PCOOOALUGUN-PD-1-CONTAINER-original-FantasticFurniture-WF-Product-Zoom?context=bWFzdGVyfGltYWdlcy9QSE9TRVQ0UENPT09BTFVHVU58NjM3ODF8aW1hZ2UvanBlZ3xpbWFnZXMvUEhPU0VUNFBDT09PQUxVR1VOL2g4MS9oMjQvOTE4Mjg4MTAyMTk4Mi5qcGd8MjY4ZmE5NGRjOTNlMjdhODM4OGNlOGNhN2I5NzM0ZTRiMGY1MTM3NjhjYzExZTYzM2NmNmM3N2I5Y2VjOTAzMw',
        'https://www.fantasticfurniture.com.au/medias/TOISET4PCOP2ALUWHI-PD-1-CONTAINER-original-FantasticFurniture-WF-Product-Zoom?context=bWFzdGVyfGltYWdlcy9UT0lTRVQ0UENPUDJBTFVXSEl8MTE5MDYyfGltYWdlL2pwZWd8aW1hZ2VzL1RPSVNFVDRQQ09QMkFMVVdISS9oMDcvaDI5LzkxODI4MjgwNjg4OTQuanBnfDcxMDY4OGVkYTU5MzkwZWUzZjg2MzU5NWIxZjk4NmNjZjgwYjExNjVlMDg1NDA2ZWUzOTBhZGU5ZjY3N2E3OTE',
    ];

    protected $stores = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->_setStoreData();

        $this->stores = [
            [
                'name' => 'Archive',
                'photo' => 'https://image.tfgmedia.co.za/image/1/process/639x639?source=http://cdn.tfgmedia.co.za/06/ProductImages/57526725_02.jpg',
                'photo_cover' => 'https://blog.archivestore.co.za/wp-content/uploads/2019/03/vans-style-73-dx-anaheim-factory-og-black-va3wlqul1-2-os.jpg',
                'phone' => '0860 834 834',
                'description' => 'Archive is South Africa’s premium streetwear destination, which has an extensive collection of highly coveted, limited edition sneakers, clothing and accessories. Our selection of exclusives include limited edition sneaker- and streetwear packs by Nike Sportswear, adidas Originals, PUMA, Vans, ASICS, FILA and Jordan’s iconic Retro collection. We collaborate with iconic brands with celebrated heritage to deliver best-level, collector’s edition sneakers, clothing and accessories. Our love of street culture is emanated through our collections that’s available in-store and online. We are sneaker and streetwear enthusiasts. We understand sneaker heritage, we’re connected to current trends and excited by brand innovation through technology. Welcome to Archive’s online shop.',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.archivestore.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Foschini',
                'photo' => 'https://image.tfgmedia.co.za/image/1/process/452x57?source=http://cdn.tfgmedia.co.za/00/BrandImage/foschini.png',
                'photo_cover' => 'https://image.tfgmedia.co.za/image/1/process/639x639?source=http://cdn.tfgmedia.co.za/00/ProductImages/57396384.jpg',
                'phone' => '0860 834 834',
                'description' => 'Locally made. From one woman to another.',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.foschini.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Exact',
                'photo' => 'https://image.tfgmedia.co.za/image/1/process/200x75?imageQuality=100&source=http://cdn.tfgmedia.co.za/03/Marketing/PromotionalImages/Exact%20New%20Logo_thick%20web.png',
                'photo_cover' => 'http://cdn.tfgmedia.co.za/03/Marketing/Love%20local%20Banner%202.jpg',
                'phone' => '0860 834 834',
                'description' => 'Family savings and more!',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.exact.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'The FIX',
                'photo' => 'https://image.tfgmedia.co.za/image/1/process/160x57?source=https://cdn.tfgmedia.co.za/17/Marketing/Logo/FIX%20LOGO%20WEB%20160mm%20x%2057mm%20h.png',
                'photo_cover' => 'https://image.tfgmedia.co.za/image/1/process/750x750?source=http://cdn.tfgmedia.co.za/17/Marketing/Widgets/SALE.png',
                'phone' => '0860 834 834',
                'description' => 'Locally made!',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.thefix.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Foschini For Beauty',
                'photo' => 'https://image.tfgmedia.co.za/image/1/process/452x57?source=http://cdn.tfgmedia.co.za/00/BrandImage/foschini.png',
                'photo_cover' => 'https://image.tfgmedia.co.za/image/1/process/602x424?source=https://cdn.tfgmedia.co.za/00/Marketing/Blocks/JBF_BlockAllWomanEyes_602x424.jpg',
                'phone' => '0860 834 834',
                'description' => 'All women since 1925',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.foschiniforbeauty.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Sportscene',
                'photo' => 'https://vml.tfgmedia.co.za/dev/img/logo/logo-sportscene.png',
                'photo_cover' => 'https://blog.sportscene.co.za/wp-content/uploads/2020/04/DSC_2147.jpg',
                'phone' => '0860 834 834',
                'description' => 'Kings of sneakerwear',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.thefix.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Markham',
                'photo' => 'https://vml.tfgmedia.co.za/dev/img/logo/logo-markham.png',
                'photo_cover' => 'https://image.tfgmedia.co.za/image/1/process/602x424?source=https://cdn.tfgmedia.co.za/02/Marketing/Homepage%20Promo%20Blocks-MKM/mkm_wk31_hi_cellphones_block_2020collab_v2.jpg',
                'phone' => '0860 834 834',
                'description' => 'Shop our top offers',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.markham.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'My Wedding',
                'photo' => 'https://vml.tfgmedia.co.za/prod/img/logo/logo-mywedding-optim.png',
                'photo_cover' => 'http://cdn.tfgmedia.co.za/myWedding/HoneymoonGuide(9).jpg',
                'phone' => '0860 834 834',
                'description' => 'Your home partner',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.mywedding.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Donna',
                'photo' => 'https://vml.tfgmedia.co.za/dev/img/logo/logo-donna.png',
                'photo_cover' => 'https://image.tfgmedia.co.za/image/1/process/602x424?source=http://cdn.tfgmedia.co.za/10/Marketing/PromotionalImages/MBlockTopsAugPlusSize.jpg',
                'phone' => '0860 834 834',
                'description' => 'Online exclusive',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.donna.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],

            [
                'name' => 'Total Sports',
                'photo' => 'https://vml.tfgmedia.co.za/prod/img/logo/logo-mywedding-optim.png',
                'photo_cover' => 'https://cdn.tfgmedia.co.za/13/Marketing/Banners/RCLP_accessories.png',
                'phone' => '0860 834 834',
                'description' => 'Fly as one',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.totalsports.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Due South Escapes',
                'photo' => 'https://vml.tfgmedia.co.za/dev/img/logo/logo-duesouthescapes.png',
                'photo_cover' => 'https://image.tfgmedia.co.za/image/1/process/1224x424?source=https://cdn.tfgmedia.co.za/19/Marketing/DSE-LUGGAGE.png',
                'phone' => '0860 834 834',
                'description' => 'Your choice our products',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.duesouthescapes.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],
            [
                'name' => 'Hi Online',
                'photo' => 'https://vml.tfgmedia.co.za/dev/img/logo/logo-hi.png',
                'photo_cover' => 'http://image.tfgmedia.co.za/image/1/process/1600x450?source=http://cdn.tfgmedia.co.za/27/Marketing/PromotionalImages/Home_school_CatBannerDesktop.png',
                'phone' => '0860 834 834',
                'description' => 'Everyday gigs',
                'content' => serialize(['store_number' => 'Not set']),
                'url' => 'https://www.hi-online.co.za/',
                'trading_hours' => 'Monday - Friday: 08h00 - 19h00<br/>
                                    Saturday: 08h00 - 15h00<br/>
                                    Sunday: 08h00 - 13h00<br/>
                                    Public Holidays: 08h00 – 15h00',
            ],


            ///
//            [
//                'name' => 'MRP',
//                'photo' => 'https://www.waterfront.co.za/wp-content/uploads/2018/05/mrp.jpg',
//                'photo_cover' => 'https://mrp.scene7.com/is/image/MRP/01_1104610665_SI_00?$atg-viewer-LargeView$&qlt=80',
//                'description' => 'Less means more',
//                'url' => 'https://www.mrp.com',
//            ],
//            [
//                'name' => 'MRP Home',
//                'photo' => 'https://www.mrphome.com/media/vaimo/uploadlogo/stores/11/logo-home.png',
//                'photo_cover' => 'https://www.mrphome.com/media/wysiwyg/mrp_home/2019/wk-7/shop-rugs-2019.jpg',
//                'description' => 'We believe fashion is for everyone',
//                'url' => 'https://www.mrphome.com/'
//            ],
//            [
//                'name' => 'Office Group',
//                'photo' => 'https://www.officegroup.co.za/wp-content/uploads/2018/04/office-group-logo.png',
//                'photo_cover' => 'https://www.officegroup.co.za/wp-content/uploads/2018/04/dakota-desk-with-round-tube-legs.jpg',
//                'description' => 'The largest variety of furniture anywhere',
//                'url' => 'https://www.officegroup.co.za/'
//            ],
//            [
//                'name' => 'Weylandts',
//                'photo' => 'http://movingtactics.co.za/wp-content/uploads/2016/09/imgres.png',
//                'photo_cover' => 'https://www.weylandts.co.za/wp-content/uploads/nf_image/WEBSITE-IMAGE-HOMEPAGE-IMAGE-min-p2pdwgf7b64j1x1gdivul47k.jpg',
//                'description' => 'Welcome to the home of bold design with soul.',
//                'url' => 'https://www.weylandts.co.za/'
//            ],
//            [
//                'name' => 'MRP Sport',
//                'photo' => 'https://www.mrpsport.com/media/vaimo/uploadlogo/websites/13/logo-sport.png',
//                'photo_cover' => 'https://www.mrpsport.com/cdn/07/landingPages/Team_Sports/2019/wk40/soccer-balls.jpg',
//                'description' => 'We\'ve got the gear for everyone',
//                'url' => 'https://www.mrphome.com/'
//            ],
//            [
//                'name' => 'Label Collections',
//                'photo' => 'https://i.pinimg.com/280x280_RS/50/8d/e6/508de6d58d25eb4e8649065927696fab.jpg',
//                'photo_cover' => 'https://www.labelcollections.com/image/cache/catalog/Slider-Banner-2-2048x931.jpg?1592058761810',
//                'description' => 'LABEL Collections is about luxury, quality, simplicity and integrity. ',
//                'url' => 'https://www.labelcollections.com'
//            ],
//            [
//                'name' => 'Yuppiechef',
//                'photo' => 'https://media.2oceansvibe.com/wp-content/uploads/2017/09/Wedding-friends-Yuppie-Chef-Competition-Cover1.jpg',
//                'photo_cover' => 'https://res.cloudinary.com/yuppiechef/image/upload/c_lpad,f_auto,h_556,q_auto,w_556/v1/contentdocs/46595/picture20190930125912',
//                'description' => 'Premier kitchen and homeware store.',
//                'url' => 'https://www.yuppiechef.com/',
//            ],
//            [
//                'name' => 'Superbalist',
//                'photo' => 'https://i.pinimg.com/280x280_RS/52/02/d1/5202d142699d8ccccb488a6ec2a4476e.jpg',
//                'photo_cover' => 'https://assets.superbalistcdn.co.za/1250x/filters:quality(75):format(jpg)/cms/HM_banner_double_the_size.jpg',
//                'description' => 'South Africa’s most-loved, online wardrobe + lifestyle destination. ',
//                'url' => 'https://superbalist.com/',
//            ],
//            [
//                'name' => 'Cotton On',
//                'photo' => 'https://foresthillcity.co.za/wp-content/uploads/2018/11/cottonon-hover-450x450.jpg',
//                'photo_cover' => 'https://imgaz1.chiccdn.com/thumb/large/oaupload/ser1/newchic/images/EC/13/0b749ed4-c57b-414b-8fd5-0f04b5186582.jpg',
//                'description' => 'Cotton On',
//                'url' => 'Cotton On',
//            ],
//            [
//                'name' => 'Zara',
//                'photo' => 'https://i.pinimg.com/564x/86/ef/cf/86efcfa971fc6d1858f8826bcaef5e1c.jpg',
//                'photo_cover' => 'https://static.zara.net/photos///2020/S/0/1/p/0014/013/800/2/w/1140/0014013800_2_1_1.jpg?ts=1591288045918',
//                'description' => 'Zara is one of the largest international fashion companies.',
//                'url' => 'https://www.zara.com/za/',
//            ],
//            [
//                'name' => '@home',
//                'photo' => 'http://designcompany.co.za/new-website/wp-content/uploads/2018/10/@home-300x150.png',
//                'photo_cover' => 'https://image.tfgmedia.co.za/image/1/process/1224x689?source=https://cdn.tfgmedia.co.za/15/Marketing/Endecca/Desktop/Web_LargeBanner_100620_2.jpg',
//                'description' => 'The homeware store.',
//                'url' => 'https://www.home.co.za',
//            ],
        ];
        foreach ($this->stores as $store) {
            $this->_setStore($store);
        }
    }

    /**
     * @param $photo
     * @return string
     */
    private function getFileExt($photo)
    {
        $ext = 'jpg';
        if (strpos($photo, 'png') !== FALSE) {
            $ext = 'png';
        }
        $photoName = sha1($photo) . ".{$ext}";
        return $photoName;
    }

    /**
     * @param array $stores
     * @return array
     */
    private function _setStoreData()
    {
        $crawler = Goutte::request('GET', 'http://Shopple.local/import-base-stores');

        $crawler->filter('.filterall')->each(function ($node) {
            $store = [];
            $category = NULL;
            $categoryText = $node->attr('class');
            $categoryParts = explode(' ', $categoryText);

            if (!empty($categoryParts[1])) {
                $categoryLike = str_replace('filter-', '', $categoryParts[1]);
                $categoryLike = str_replace('-category', '', $categoryLike);

                $category = \App\Category::where('level', 0)
                    ->where('slug', 'like', "{$categoryLike}%")
                    ->first();

                if (!empty($category->id)) {
                    $store['category_id'] = $category->id;
                    echo ">>>Linking category >>>> " . $category->slug . "\n";
                }
            }

            if ($node->filter('.eg-invisiblebutton')->count()) {
                $url = $node->filter('.eg-invisiblebutton')->attr('href');

                $store['url'] = $url;

                $nameNode = $node->filter('.esg-tc .esg-transition')->eq(1);
                if ($nameNode->count()) {
                    $name = $nameNode->text();

                    $name = preg_replace("/[^A-Za-z0-9 ]/", ' ', $name);
                    $name = preg_replace('/\s+/', ' ', $name);
                }

                $store['name'] = $name;
                $storeNode = Goutte::request('GET', $url);

                $photoNode = $storeNode->filter('.entry-content .col-md-5 img');
                $photoName = '';

                if ($photoNode->count() > 0) {
                    $photoName = $photoNode->attr('src');
                }

                echo "Store name: <<<<<<{$name}>>>>>\n";

                $store['photo'] = $photoName;
                $tradingHoursNode = $storeNode->filter('.entry-content .col-md-6 p')->eq(1);

                $store['photo_cover'] = $this->photoCovers[rand(0, count($this->photoCovers) - 1)];

                if ($tradingHoursNode->count() > 0) {
                    $store['trading_hours'] = $tradingHoursNode->text();
                }

                $storeNode->filter('.entry-content .col-md-6 p')->each(function ($node) use (&$store) {
                    $content = $node->text();
                    $labelNode = $node->filter('strong');

                    if ($labelNode->count() > 0 && $labelNode->text() != 'Trading Hours:') {
                        $label = $labelNode->text();

                        if ($label == 'Store Number:') {
                            echo "Store label: <<<<<<{$label}>>>>>\n";
                            echo "Store content: <<<<<<{$content}>>>>>\n";

                            $store['phone'] = str_replace($label, '', $content);

                            $store['content'] = serialize(['store_number' => $content]);
                        }

                        if ($label == 'Contact Number:') {
                            $store['phone'] = str_replace($label, '', $content);
                        }

                        if ($label == 'Store Description:') {
                            $store['description'] = $content;
                        }

                        if ($label == 'Store Website:') {
                            $store['url'] = str_replace($label, '', $content);
                        }
                    } else if (@$store['description'] == 'Store Description:') {
                        $store['description'] = $content;
                    }
                });

                try {
                    $this->_setStore($store);
                } catch (Exception $e) {

                }

            } else {
                echo ">>>Skipped" . $node->filter('span')->text() . "\n";
            }
        });
    }

    /**
     * @param array $store
     */
    private function _setStore(array $store)
    {
        if (!empty($store['photo'])) {
            $photoName = $this->getFileExt($store['photo']);

            Storage::disk('store')->put($photoName, file_get_contents($store['photo']));
            $store['photo'] = $photoName;
        }

        if (!empty($store['photo_cover'])) {
            $photoCover = $this->getFileExt($store['photo_cover']);
            Storage::disk('store')->put($photoCover, file_get_contents($store['photo_cover']));
            $store['photo_cover'] = $photoCover;
        }

        $attributes = [
            'name' => $store['name']
        ];
        $store['order'] = 1;

        $store = \App\Store::updateOrCreate($attributes, $store);

        echo "Updated store :: " . $store['name'] . "\n";
    }
}
