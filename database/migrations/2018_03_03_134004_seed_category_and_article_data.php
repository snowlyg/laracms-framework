<?php
/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use 569616226\Laracms\Models\Article;
use 569616226\Laracms\Models\Category;
use 569616226\Laracms\Models\Page;
use 569616226\Laracms\Models\Navigation;


class SeedCategoryAndArticleData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Category::create([
            'id'     => 4,
            'name'   => '产品资讯',
            'parent' => 0,
            'path'   => '0',
            'type'   => 'article'
        ]);
        Category::create([
            'id'     => 5,
            'name'   => '展览信息',
            'parent' => 0,
            'path'   => '0',
            'type'   => 'article'
        ]);
        Category::create([
            'id'     => 6,
            'name'   => '培训动态',
            'parent' => 0,
            'path'   => '0',
            'type'   => 'article'
        ]);


        Page::create([
            'id'         => 1,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889566486881',
            'title'      => '聚川介绍',
            'content'    => '<p><span style="color:rgb(85,85,85);font-size:15px;">前不久，一则重磅新闻引爆国内汽车市场，那就是国务院总理李克强9月29日主持召开国务院常务会议中决定，从2015年10月1日到2016年12月31日，对购买1.6升及以下排量乘用车实施减半征收车辆购置税的优惠政策。这便意味着市场上那些符合这一标准的车型，在消费者交全款买车前，就已经有了几千元甚至上万元的优惠！应该说此项举措对于目前比较消沉的车市以及不少持币观望合适买车的消费者来说，能起不少推动和促进的效果。</span></p><p><span style="color:rgb(85,85,85);font-size:15px;">但在不少消费者心中，总是认为符合这一标准的车型基本都集中在了紧凑级以及微型车，对于那些想买级别再高车型的朋友来说有点不沾边。其实有这种想法的朋友大可不必担心，因为在目前的市场上，配有小排量涡轮增压发动机的B级车有很多，完全满足市场的要求。今天，我们特意选出了4款在这个级别比较有特点的车型，希望能对您有些帮助。</span></p>',
        ]);
        Page::create([
            'id'         => 2,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889630591207',
            'title'      => '公司资质',
            'content'    => '<p>2月1日消息，上个星期，6 名居住在瓦格宁根的荷兰人，度过难忘的旅程。——他们坐上了全荷兰首次公开驾驶的无人驾驶汽车，尽管车速只有 8 km/h 的速度，行驶了 200 米的距离。</p><p>这个无人驾驶汽车由 The WePod 公司制造，它的最高行驶速度当然不止 8km/h，不过为了公开测试的安全性，所以特意降低了行驶的速度。要知道，除了车上的 6 个人，路边还有很多好奇宝宝观摩。</p>',
        ]);
        Page::create([
            'id'         => 3,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889676648976',
            'title'      => '成长轨迹',
            'content'    => '<p><span style="font-size:15px;">2月3日消息，据外媒报道称，最近日本任天堂社长君岛达己日前在盈余电话会议上也将</span><a href="http://www.kejixun.com/special/xunixianshi/">虚拟现实</a><span style="font-size:15px;">称作是“有趣的技术”。这一表述和之前苹果公司库克的表述极其类似。据报道，以</span><a href="http://www.kejixun.com/game/">游戏</a><span style="font-size:15px;">机和马里奥知名的任天堂表示他们正在</span><a href="http://tansuo.kejixun.com/">探索</a><span style="font-size:15px;">虚拟现实技术，但目前还没有发布任何产品的具体计划。</span></p><p>实际上，任天堂早在1995年就率先推出了市面上最早的虚拟现实设备之一Virtual Boy，但由于高售价、黑白屏幕和易引发头晕恶心等问题，这款设备最终惨遭失败。当然，如今的虚拟现实已经成为业界新宠，也吸引到各大巨头涉足其中，为消费者越来越频繁地带来自己的虚拟现实设备。</p>',
        ]);
        Page::create([
            'id'         => 4,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889730658221',
            'title'      => '设计理念',
            'content'    => '<p>高盛日前发布的一份报告显示，过去两年中<a href="http://www.kejixun.com/special/xunixianshi/">VR</a>/AR领域共进行225笔风险投资，投资额达35亿美元。与90年代的失败相比，当前的VR热有什么不同?答案在于技术。</p>',
        ]);
        Page::create([
            'id'         => 5,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889782101318',
            'title'      => '经营理念',
            'content'    => '<p>国产车型的样子与进口车型基本保持一致，这点非常值得称赞。相比同级别的X1和Q3，GLA级显然要更精致、更好看，对于不少外貌协会的朋友来说，十分符合他们的心意。车身尺寸方面，它的车身高度不占任何优势，而离地间隙却是最高的。</p>',
        ]);
        Page::create([
            'id'         => 6,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889837701212',
            'title'      => 'E-SOP',
            'content'    => '<p><span style="font-size:16px;">凤凰汽车·多车导购 很多国内消费者在选购车辆时都比较倾向于合资车型，原因大多是感觉合资车型在质量、工艺等方面更为可靠。而这其中，以经济实用见长的日系车型在近年来表现强势，销量表现也是节节高升。但不可否认，历史遗留问题还是限制了很大一部分消费者购买日系车型。今天的文章，我们就为大家在轿车类别各细分市场精选了4款标杆级车型，如果您在近期有购车计划，那么希望今天的文章能够对您有所帮助。</span></p><p><span style="font-size:16px;">级别：小型车</span></p><p><span style="font-size:16px;">推荐车型：雪佛兰赛欧</span></p><p><span style="font-size:16px;">官方指导价：5.99-7.99</span></p><p><span style="font-size:16px;">新赛欧采用新一代雪佛兰设计语言，新车配备了雪佛兰全球最新家族式双格栅，进气口边缘的角度与老款赛欧的盾牌型进气口比较相似。尾部方面，新赛欧在尾灯造型与保险杠处均经过了全新设计，蝶形双尾灯以及层次丰富的尾部设计，使得整车看上去更为动感。</span></p>',
        ]);
        Page::create([
            'id'         => 7,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889884583943',
            'title'      => '智能工具',
            'content'    => '<p><span style="color:rgb(85,85,85);font-size:16px;">2015年度Honda中国媒体大会在深圳召开，这次媒体大会上本田技研介绍了即将在中国市场投放的两项新技术和新技术的搭载计划，并公布了部分未来车型的发表计划，一向被人称为汽车圈里“技术宅”的本田技研，这次给中国市场带来了什么新鲜玩意儿呢？</span></p><p><span style="color:rgb(85,85,85);font-size:16px;">安全驾驶辅助系统Honda SENSING（安全超感）</span></p><p><span style="color:rgb(85,85,85);font-size:16px;">Honda SENSING（安全超感）系统是在以往车辆主/被动安全经验的基础上，面向未来自动驾驶需求开发的全方位安全驾驶辅助系统。</span></p>',
        ]);
        Page::create([
            'id'         => 8,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889903760156',
            'title'      => '数控系统',
            'content'    => '<p>凤凰汽车•多车导购 对于中型SUV而言，除了大多数消费者都会关心的乘坐舒适性以及储物空间大小，在安全性方面我们也同样不能忽视。<br />我们通过《购车消费评价》的实测数据为大家带来各个级别车型在某一方面的横向对比，不吹不黑，完全用事实说话，来为大家的选车提供最准确的参考。</p><p>本期我们锁定的对比对象是中型SUV，由于一款车的安全性会涉及到十分多的方面，因此我们仅通过车辆在100公里每小时的紧急制动表现、主被动安全性配置来了解一款车辆在这两方的安全性，来为大家选车提供一些参考。</p>',
        ]);
        Page::create([
            'id'         => 9,
            'author'     => '管理员',
            'is_link'    => '0',
            'template'   => 'pages',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889942778211',
            'title'      => '拧紧设备',
            'content'    => '<p><span style="font-size:15px;">增强现实(AR)正在成为下一个热门的投资领域。就在昨日，增强现实(AR)创业公司Magic Leap今日宣布，在新一轮融资中获得7.935亿美元的投资，本轮融资由</span><a href="http://www.kejixun.com/special/Alibaba/">阿里巴巴</a><span style="font-size:15px;">领投。</span></p><p>其他新投资者还包括华纳兄弟、富达管理研究公司、摩根大通和摩根士丹利投资管理公司。此外，当前股东谷歌和高通风投(Qualcomm Ventures)也参与了本轮融资。</p><p>高盛日前发布的一份报告显示，过去两年中<a href="http://www.kejixun.com/special/xunixianshi/">VR</a>/AR领域共进行225笔风险投资，投资额达35亿美元。与90年代的失败相比，当前的VR热有什么不同?答案在于技术。</p>',
        ]);
        Page::create([
            'id'         => 10,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890202413795',
            'title'      => '机器人应用',
            'content'    => '<p><span style="color:rgb(51,51,51);font-size:14px;">增强现实(AR)正在成为下一个热门的投资领域。就在昨日，增强现实(AR)创业公司Magic Leap今日宣布，在新一轮融资中获得7 935亿美元的投资，本轮融资由阿里巴巴领投。</span><br /></p>',
        ]);
        Page::create([
            'id'         => 11,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890267967061',
            'title'      => '在线工作站',
            'content'    => '<h4>岗位职责：</h4><ol><li>完成需求分析，并完成产品策划.原型设计</li><li>负责跟踪管理完成产品的界面.功能.流程设计</li><li>监控产品运行效果，收集用户反馈，分析用户行为统计数据，挖掘并发现用户需求，并根对产品进行持续改进</li><li>制定明确的产品功能规划，以及产品项目计划，为开发团队提供明确的产品资料文档</li><li>负责用户研究，把握用户需求和行为特点，实现用户需求</li><li>提升整体产品用户满意度</li><li>对线上产品持续进行数据分析与挖掘，根据数据提出产品改进和新产品的具体思路</li></ol><h4>岗位要求：</h4><ol><li><p>3年以上互联网产品工作经验，有平台类产品设计工作经验者优先</p></li><li><p>表达能力强，能够与开发和设计同事进行良好的沟通</p></li><li><p>了解互联网产品整体实现过程，包括从需求分析到产品发布</p></li><li><p>良好的逻辑思维能力，分析问题、解决问题的能力和执行力</p></li><li><p>充满责任心、服务和敬业精神</p></li></ol>',
        ]);
        Page::create([
            'id'         => 12,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890292139934',
            'title'      => '软件开发',
            'content'    => '<ol><li><p>3年以上互联网金融或第三方支付公司结算管理工作者优先</p></li><li><p>熟悉清结算各项实务的操作流程，熟悉国家结算法规政策，并能实际操作运用</p></li><li><p>有较强的亲和力和表达能力良好的沟通组织协调能力.优秀的解决复杂问题的能力</p></li><li><p>能在一定的压力下开展工作，并能够快速持续的学习</p></li></ol>',
        ]);

        Page::create([
            'id'         => 17,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890292139937',
            'title'      => '人才理念',
            'content'    => '<ol><li><p>3年以上互联网金融或第三方支付公司结算管理工作者优先</p></li><li><p>熟悉清结算各项实务的操作流程，熟悉国家结算法规政策，并能实际操作运用</p></li><li><p>有较强的亲和力和表达能力良好的沟通组织协调能力.优秀的解决复杂问题的能力</p></li><li><p>能在一定的压力下开展工作，并能够快速持续的学习</p></li></ol>',
        ]);
        Page::create([
            'id'         => 18,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890292139938',
            'title'      => '招聘岗位',
            'content'    => '<ol><li><p>3年以上互联网金融或第三方支付公司结算管理工作者优先</p></li><li><p>熟悉清结算各项实务的操作流程，熟悉国家结算法规政策，并能实际操作运用</p></li><li><p>有较强的亲和力和表达能力良好的沟通组织协调能力.优秀的解决复杂问题的能力</p></li><li><p>能在一定的压力下开展工作，并能够快速持续的学习</p></li></ol>',
        ]);
        Page::create([
            'id'         => 19,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890292139910',
            'title'      => '合作伙伴',
            'content'    => '<ol><li><p>3年以上互联网金融或第三方支付公司结算管理工作者优先</p></li><li><p>熟悉清结算各项实务的操作流程，熟悉国家结算法规政策，并能实际操作运用</p></li><li><p>有较强的亲和力和表达能力良好的沟通组织协调能力.优秀的解决复杂问题的能力</p></li><li><p>能在一定的压力下开展工作，并能够快速持续的学习</p></li></ol>',
        ]);
        Page::create([
            'id'         => 20,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890292139911',
            'title'      => '代理经销',
            'content'    => '<ol><li><p>3年以上互联网金融或第三方支付公司结算管理工作者优先</p></li><li><p>熟悉清结算各项实务的操作流程，熟悉国家结算法规政策，并能实际操作运用</p></li><li><p>有较强的亲和力和表达能力良好的沟通组织协调能力.优秀的解决复杂问题的能力</p></li><li><p>能在一定的压力下开展工作，并能够快速持续的学习</p></li></ol>',
        ]);
        Page::create([
            'id'         => 21,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890292139912',
            'title'      => '部分客户',
            'content'    => '<ol><li><p>3年以上互联网金融或第三方支付公司结算管理工作者优先</p></li><li><p>熟悉清结算各项实务的操作流程，熟悉国家结算法规政策，并能实际操作运用</p></li><li><p>有较强的亲和力和表达能力良好的沟通组织协调能力.优秀的解决复杂问题的能力</p></li><li><p>能在一定的压力下开展工作，并能够快速持续的学习</p></li></ol>',
        ]);
        Page::create([
            'id'         => 22,
            'author'     => '管理员',
            'template'   => 'pages',
            'is_link'    => '0',
            'type'       => 'page',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593890292139914',
            'title'      => '服务支援',
            'content'    => '<ol><li><p>3年以上互联网金融或第三方支付公司结算管理工作者优先</p></li><li><p>熟悉清结算各项实务的操作流程，熟悉国家结算法规政策，并能实际操作运用</p></li><li><p>有较强的亲和力和表达能力良好的沟通组织协调能力.优秀的解决复杂问题的能力</p></li><li><p>能在一定的压力下开展工作，并能够快速持续的学习</p></li></ol>',
        ]);


        Article::create([
            'id'         => 24,
            'author'     => '管理员',
            'template'   => 'news',
            'is_link'    => '0',
            'type'       => 'article',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889566486831',
            'title'      => '聚川介绍',
            'content'    => '<p><span style="color:rgb(85,85,85);font-size:15px;">前不久，一则重磅新闻引爆国内汽车市场，那就是国务院总理李克强9月29日主持召开国务院常务会议中决定，从2015年10月1日到2016年12月31日，对购买1.6升及以下排量乘用车实施减半征收车辆购置税的优惠政策。这便意味着市场上那些符合这一标准的车型，在消费者交全款买车前，就已经有了几千元甚至上万元的优惠！应该说此项举措对于目前比较消沉的车市以及不少持币观望合适买车的消费者来说，能起不少推动和促进的效果。</span></p><p><span style="color:rgb(85,85,85);font-size:15px;">但在不少消费者心中，总是认为符合这一标准的车型基本都集中在了紧凑级以及微型车，对于那些想买级别再高车型的朋友来说有点不沾边。其实有这种想法的朋友大可不必担心，因为在目前的市场上，配有小排量涡轮增压发动机的B级车有很多，完全满足市场的要求。今天，我们特意选出了4款在这个级别比较有特点的车型，希望能对您有些帮助。</span></p>',
        ])->giveCategoryTo([4]);
        Article::create([
            'id'         => 25,
            'author'     => '管理员',
            'template'   => 'news',
            'is_link'    => '0',
            'type'       => 'article',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889566486832',
            'title'      => '聚川介绍',
            'content'    => '<p><span style="color:rgb(85,85,85);font-size:15px;">前不久，一则重磅新闻引爆国内汽车市场，那就是国务院总理李克强9月29日主持召开国务院常务会议中决定，从2015年10月1日到2016年12月31日，对购买1.6升及以下排量乘用车实施减半征收车辆购置税的优惠政策。这便意味着市场上那些符合这一标准的车型，在消费者交全款买车前，就已经有了几千元甚至上万元的优惠！应该说此项举措对于目前比较消沉的车市以及不少持币观望合适买车的消费者来说，能起不少推动和促进的效果。</span></p><p><span style="color:rgb(85,85,85);font-size:15px;">但在不少消费者心中，总是认为符合这一标准的车型基本都集中在了紧凑级以及微型车，对于那些想买级别再高车型的朋友来说有点不沾边。其实有这种想法的朋友大可不必担心，因为在目前的市场上，配有小排量涡轮增压发动机的B级车有很多，完全满足市场的要求。今天，我们特意选出了4款在这个级别比较有特点的车型，希望能对您有些帮助。</span></p>',
        ])->giveCategoryTo([4]);
        Article::create([
            'id'         => 26,
            'author'     => '管理员',
            'template'   => 'news',
            'is_link'    => '0',
            'type'       => 'article',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889566486833',
            'title'      => '聚川介绍',
            'content'    => '<p><span style="color:rgb(85,85,85);font-size:15px;">前不久，一则重磅新闻引爆国内汽车市场，那就是国务院总理李克强9月29日主持召开国务院常务会议中决定，从2015年10月1日到2016年12月31日，对购买1.6升及以下排量乘用车实施减半征收车辆购置税的优惠政策。这便意味着市场上那些符合这一标准的车型，在消费者交全款买车前，就已经有了几千元甚至上万元的优惠！应该说此项举措对于目前比较消沉的车市以及不少持币观望合适买车的消费者来说，能起不少推动和促进的效果。</span></p><p><span style="color:rgb(85,85,85);font-size:15px;">但在不少消费者心中，总是认为符合这一标准的车型基本都集中在了紧凑级以及微型车，对于那些想买级别再高车型的朋友来说有点不沾边。其实有这种想法的朋友大可不必担心，因为在目前的市场上，配有小排量涡轮增压发动机的B级车有很多，完全满足市场的要求。今天，我们特意选出了4款在这个级别比较有特点的车型，希望能对您有些帮助。</span></p>',
        ])->giveCategoryTo([5]);
        Article::create([
            'id'         => 27,
            'author'     => '管理员',
            'template'   => 'news',
            'is_link'    => '0',
            'type'       => 'article',
            'created_op' => 1,
            'updated_op' => 1,
            'object_id'  => '1593889566486834',
            'title'      => '聚川介绍',
            'content'    => '<p><span style="color:rgb(85,85,85);font-size:15px;">前不久，一则重磅新闻引爆国内汽车市场，那就是国务院总理李克强9月29日主持召开国务院常务会议中决定，从2015年10月1日到2016年12月31日，对购买1.6升及以下排量乘用车实施减半征收车辆购置税的优惠政策。这便意味着市场上那些符合这一标准的车型，在消费者交全款买车前，就已经有了几千元甚至上万元的优惠！应该说此项举措对于目前比较消沉的车市以及不少持币观望合适买车的消费者来说，能起不少推动和促进的效果。</span></p><p><span style="color:rgb(85,85,85);font-size:15px;">但在不少消费者心中，总是认为符合这一标准的车型基本都集中在了紧凑级以及微型车，对于那些想买级别再高车型的朋友来说有点不沾边。其实有这种想法的朋友大可不必担心，因为在目前的市场上，配有小排量涡轮增压发动机的B级车有很多，完全满足市场的要求。今天，我们特意选出了4款在这个级别比较有特点的车型，希望能对您有些帮助。</span></p>',
        ])->giveCategoryTo([6]);

        Navigation::create([
            'id'         => 1,
            'category'   => 'desktop',
            'type'       => 'action',
            'title'      => '首页',
            'target'     => '_self',
            'parent'     => 0,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"route": "home", "params": "{}"}'
        ]);
        Navigation::create([
            'id'         => 2,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '关于聚川',
            'target'     => '_self',
            'parent'     => 0,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "1"}'
        ]);
        Navigation::create([
            'id'         => 3,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '聚川介绍',
            'target'     => '_self',
            'parent'     => 2,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "1"}'
        ]);
        Navigation::create([
            'id'         => 4,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '公司资质',
            'target'     => '_self',
            'parent'     => 2,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "2"}'
        ]);
        Navigation::create([
            'id'         => 5,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '成长轨迹',
            'target'     => '_self',
            'parent'     => 2,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "3"}'
        ]);
        Navigation::create([
            'id'         => 6,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '设计理念',
            'target'     => '_self',
            'parent'     => 2,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "4"}'
        ]);
        Navigation::create([
            'id'         => 7,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '经营理念',
            'target'     => '_self',
            'parent'     => 2,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "5"}'
        ]);

        Navigation::create([
            'id'         => 8,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '产品导航',
            'target'     => '_self',
            'parent'     => 0,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "6"}'
        ]);
        Navigation::create([
            'id'         => 9,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => 'E-SOP',
            'target'     => '_self',
            'parent'     => 8,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "6"}'
        ]);
        Navigation::create([
            'id'         => 10,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => 'E-智能工具',
            'target'     => '_self',
            'parent'     => 8,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "7"}'
        ]);
        Navigation::create([
            'id'         => 11,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => 'E-数控系统',
            'target'     => '_self',
            'parent'     => 8,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "8"}'
        ]);
        Navigation::create([
            'id'         => 12,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '拧紧设备',
            'target'     => '_self',
            'parent'     => 8,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "9"}'
        ]);
        Navigation::create([
            'id'         => 13,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '机器人应用',
            'target'     => '_self',
            'parent'     => 8,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "10"}'
        ]);
        Navigation::create([
            'id'         => 14,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '在线工作站',
            'target'     => '_self',
            'parent'     => 8,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "11"}'
        ]);
        Navigation::create([
            'id'         => 15,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '软件开发',
            'target'     => '_self',
            'parent'     => 8,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "12"}'
        ]);

        Navigation::create([
            'id'         => 16,
            'category'   => 'desktop',
            'type'       => 'category',
            'title'      => '新闻资讯',
            'target'     => '_self',
            'parent'     => 0,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"category_id": "4"}'
        ]);
        Navigation::create([
            'id'         => 17,
            'category'   => 'desktop',
            'type'       => 'category',
            'title'      => '产品资讯',
            'target'     => '_self',
            'parent'     => 16,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"category_id": "4"}'
        ]);
        Navigation::create([
            'id'         => 18,
            'category'   => 'desktop',
            'type'       => 'category',
            'title'      => '展览信息',
            'target'     => '_self',
            'parent'     => 16,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"category_id": "5"}'
        ]);
        Navigation::create([
            'id'         => 19,
            'category'   => 'desktop',
            'type'       => 'category',
            'title'      => '培训动态',
            'target'     => '_self',
            'parent'     => 16,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"category_id": "6"}'
        ]);

        Navigation::create([
            'id'         => 20,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '人才招聘',
            'target'     => '_self',
            'parent'     => 0,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "17"}'
        ]);
        Navigation::create([
            'id'         => 21,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '人才理念',
            'target'     => '_self',
            'parent'     => 20,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "17"}'
        ]);
        Navigation::create([
            'id'         => 22,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '招聘岗位',
            'target'     => '_self',
            'parent'     => 20,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "18"}'
        ]);
        Navigation::create([
            'id'         => 23,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '合作运营',
            'target'     => '_self',
            'parent'     => 0,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "19"}'
        ]);
        Navigation::create([
            'id'         => 24,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '合作伙伴',
            'target'     => '_self',
            'parent'     => 23,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "19"}'
        ]);
        Navigation::create([
            'id'         => 25,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '代理经销',
            'target'     => '_self',
            'parent'     => 23,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "20"}'
        ]);
        Navigation::create([
            'id'         => 26,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '部分客户',
            'target'     => '_self',
            'parent'     => 23,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "21"}'
        ]);
        Navigation::create([
            'id'         => 27,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '服务支援',
            'target'     => '_self',
            'parent'     => 0,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "22"}'
        ]);
        Navigation::create([
            'id'         => 28,
            'category'   => 'desktop',
            'type'       => 'page',
            'title'      => '服务支援',
            'target'     => '_self',
            'parent'     => 27,
            'is_show'    => '1',
            'created_op' => 1,
            'updated_op' => 1,
            'params'     => '{"page_id": "22"}'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Category::where('type', '=', 'article')->delete();
        Article::where('type', '=', 'article')->delete();
        page::where('type', '=', 'page')->delete();
        Navigation::where('type', '=', 'desktop')->delete();
    }
}
