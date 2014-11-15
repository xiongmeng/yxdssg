<?php
Route::get('/', function(){
    $products = array(
        array(
            'image' => '/image/CIMG1404.JPG',
            'active' => true,
        ),
        array(
            'image' => '/image/CIMG1590.JPG'
        ),
        array(
            'image' => '/image/CIMG1609.JPG'
        ),
        array(
            'image' => '/image/CIMG1610.JPG'
        ),
        array(
            'image' => '/image/CIMG1618.JPG'
        ),
    );

    $guoMuFengCais = array(
        array(
            'image' => '/image/CIMG1545.JPG',
            'active' => true,
        ),
        array(
            'image' => '/image/CIMG1547.JPG'
        ),
        array(
            'image' => '/image/CIMG1548.JPG'
        ),
        array(
            'image' => '/image/CIMG1553.JPG'
        ),
        array(
            'image' => '/image/CIMG1556.JPG'
        ),
        array(
            'image' => '/image/CIMG1557.JPG'
        ),
    );

    $credits = array(
        array(
            'image' => '/image/CIMG1617.JPG',
            'active' => true,
        ),
        array(
            'image' => '/image/CIMG1573.JPG'
        ),
        array(
            'image' => '/image/CIMG1582.JPG'
        ),
        array(
            'image' => '/image/CIMG1643.JPG'
        ),
    );

    $histories = array(
         array(
            'id' => '2011-08',
            'title' => '注册商标家峪红',
            'content' => '在2011年8月份我们合作社注册商标家峪红，生产无公害的水果，使果农增加了收入',
        ),
        array(
            'id' => '2012-07',
            'title' => '申请绿色食品标志',
            'content' => '2012年7月18日我们合作社向辽宁省绿色食品办公室申请绿色食品标志 . 我们严格按照绿色食品管理条例来管理果树，使我们生产的寒富苹果达到了绿色食品标准，已通过了辽宁省生态研究所的检测。我们的苹果质量好了，可以和大的超市签订收购合同，那样果农的果品就在也不愁卖了，而且还能卖好价钱',
        ),
        array(
            'id' => '2012',
            'title' => '不断壮大的规模',
            'content' => '截止2012年我们合作社已经发展社员1000多户，共有约近10000亩果园。合作社的成员收入的80%来源于果树。在这样的发展势头下我们更觉得责任重大， 不能辜负社员们对我们的期望，因此我们在科学合理，并与市场相对接的基础上决定通过整合土地资源，制定发展本社的发展规划，引领农民走出单一种植粮食作物，根据市场需求来耕作，以期达到大幅度提高农民收入，促进聚四方合作社的快速发展',
        ),
        array(
            'id' => '2013',
            'title' => '修建气调库',
            'content' => '2013年我们合作社准备修建200平米的气调库，这样才能保证及时给购方充足的货源。 我们经过反复论证引导农户进行等市场前景比较看好的、口感好、价格高的新品种逐渐更换老的品种，提高市场价值种植栽培，聘请专家对农户进行栽培管理的培训，让农户得有力的经济实惠的同时也为合作社未来发展提供有力的后劲。',
        ),
        array(
            'id' => '现在',
            'title' => '服务无处不在',
            'content' => '我们统一采购化肥、农药等生产资料；组织采购销售成员生产的水果；开展成员所需的运输、包装等服务；为成员引进新品种；提供技术培训，技术交流和咨询服务等等。给乡亲们搭建一个走向致富奔小康的平台。',
        ),
        array(
            'id' => '将来',
            'title' => '服务无处不在',
            'content' => '要发展农村经济，想在有限的土地上创造出更多的效益必须改变现有的种植模式，合作社在资金技术产品销售等环节给予大力支持，让提早上市的无公害的、绿色的果品成为本合作社经济发展的新亮点。<br/>因此 通过我们的规划，让本乡的水果产业发展走上一个前所未有的新阶段，同时也作为立足本土 服务农民的经济组织更好发展的契机。在我们实施以上规划的同时也存在大量的难以克服的困难和问题，但我们有信心，在“精心组织求发展，热忱服务富农民”宗旨下，更加满怀信心，为我们镇的经济腾飞作出更大的贡 献。',
        ),
    );

	return View::make('hello', array('products' => $products, 'credits' => $credits, 'guoMuFengCais' => $guoMuFengCais, 'histories' => $histories));
});
