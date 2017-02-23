<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;
use Think\Think;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function hot_store()
    {
        $vs = $_GET['vest'];
        $user = M('goods');
        $hotuser = M('hotgoods');
        if ($_SESSION['lookedid']) {
            $_SESSION['lookedid'] = array_unique($_SESSION['lookedid']);
            $idarr = $_SESSION['lookedid'];
            if (count($idarr) > 5) {
                array_shift($idarr);
            }
            $ids = implode(',', $idarr);
            $where['id'] = array('in', $ids);
            $looked = $user->where($where)->select();
            $this->assign('looked', $looked);

        }
        $this->assign('data', $user->where('id>=45 and id<=49')->select());
        $count = $user->where("vest='{$vs}' and id>5 and id<45")->count();
        $page = new Page($count, 6);
        $data1 = $user->where("vest='{$vs}' and id>5 and id<45")->order('id')->limit($page->firstRow . ',' . $page->listRows)->select();
        $hot = $hotuser->table('tb_goods,tb_hotgoods')->where('tb_hotgoods.id <=3 and tb_hotgoods.hot=4 and tb_hotgoods.gid=tb_goods.id')->select();
        $this->assign('data2', $hot);
        $this->assign('data1', $data1);
        $this->assign("page", $page->show());
    }

    public function zte_first()
    {
        $user = M('goods');
        $data = $user->table('tb_goods,tb_hotgoods')->where('tb_hotgoods.hot=4 and tb_hotgoods.gid=tb_goods.id')->select();
        $hots = $user->where('hot=2')->select();
        $this->assign('data1', $data);
        $this->assign('hot', $hots);
        $this->assign('data', $user->select());
        $this->display();


    }

    public function detail()
    {
        $goods = M('goods');
        $id = $_GET['id'];
        if ($id) {
            $_SESSION['lookedid'][] = $id;
            $_SESSION['lookedid'] = array_unique($_SESSION['lookedid']);
            $idarr = $_SESSION['lookedid'];
            if (count($idarr) > 5) {
                array_shift($idarr);
            }
            $ids = implode(',', $idarr);
            $where['id'] = array('in', $ids);
            $looked = $goods->where($where)->select();
            $this->assign('looked', $looked);
            $data6 = $goods->table('tb_goods a,tb_suits b')->where("a.id='{$id}' and a.id=b.gid")->find();
            $this->assign('data6', $data6);
            $com = M('comment');
            $count = $com->where("gid='{$id}'")->count();
            $count0 = $com->where("gid='{$id}' and com_level=1")->count();
            $count1 = $com->where("gid='{$id}' and com_level=2")->count();
            $count2 = $com->where("gid='{$id}' and com_level=3")->count();
            $this->assign('count2', $count2);
            $this->assign('count1', $count1);
            $this->assign('count0', $count0);
            $this->assign('count', $count);
            $this->assign('data', $goods->select());
            $this->assign('data1', $goods->where('id=' . $id)->find());
            $d = $goods->where('id=' . $id)->find();
            $pic = explode(',', $d['pic']);
            $this->assign('pic', $pic);
            $num = count($pic);
            $this->assign('num', $num);
            $this->display();
        } else {
            $this->error('id 不能为空');
        }

    }


    public function cart()
    {
        $user = M('goods');
        $this->assign('data', $user->select());
        $userid = $_SESSION['user']['id'];
        $cart = M('cart');
        $data['gid'] = $_POST['id'];
        $ids = $cart->where('id=' . $data['gid'])->find();
        $goodsinfo = $user->where('id=' . $data['gid'])->find();
        if ($ids) {
            $data1['buynum'] = ($ids['buynum']) + 1;
            $data1['subtotal'] = $data1['buynum'] * $goodsinfo['price'];
            $data1['id'] = $ids['id'];
            if ($cart->create($data1)) {
                $cart->save();
            }

        } else {
            $data['uid'] = $userid;
            $data['gprice'] = $goodsinfo['price'];
            $data['buynum'] = $_POST['num'];
            if ($_POST['tc']) {
                $data['subtotal'] = $data['buynum'] * ($goodsinfo['price'] + $_POST['tc']);
            } else {
                $data['subtotal'] = $data['buynum'] * $goodsinfo['price'];
            }
            if ($cart->create($data)) {
                $cart->add();
            }
        }

        $id = $cart->field('gid')->select();
        foreach ($id as $k) {
            foreach ($k as $num) {
                $m[] = $num;
            }
        }
        $nums = implode(',', $m);
        $this->assign('info', $user->table('tb_goods,tb_cart')->where('tb_cart.gid=tb_goods.id and tb_cart.uid=' . $userid)->select());
        $this->assign('total', $cart->where('uid=' . $userid)->sum('subtotal'));
        $this->display();
    }


    public function cartdel()
    {
        if ($_POST['id']) {
            $cart = M('cart');
            $affectnum = $cart->where('id=' . $_POST['id'])->delete();
        }
        if ($affectnum) {
            $userid = $_SESSION['user']['id'];
            $data = $cart->where('uid=' . $userid)->sum('subtotal');
            $clear['total'] = $data;
            $clear['ok'] = 'ok';
            $this->ajaxReturn($clear, 'JSON');
        } else {
            $this->error('商品删除失败');
        }
    }

    public function cartnum()
    {
        if ($_POST['addnum'] && $_POST['id']) {
            $goodsuser = M('goods');
            $cart = M('cart');
            $data['buynum'] = $_POST['addnum'];
            $data['id'] = $_POST['id'];
            $data1 = $cart->where('id=' . $data['id'])->find();
            $goodsid = $data1['gid'];
            $store = $goodsuser->where('id=' . $goodsid)->find();
            if ($data['buynum'] >= $store['stocks']) {
                $data['buynum'] = $store['stocks'];
            }

            $data['subtotal'] = $data1['gprice'] * $data['buynum'];
            if ($cart->create($data)) {
                $cart->save();
            }
            $info = $cart->where('id=' . $data['id'])->find();
            $uid = $_SESSION['user']['id'];
            $totalprice = $cart->where('uid=' . $uid)->sum('subtotal');
            $map['totalprice'] = '￥' . $totalprice;
            $map['total'] = '￥' . $info['subtotal'];
            $map['store'] = $store['stocks'];
            $this->ajaxReturn($map, 'JSON');

        }

    }

    public function cartclear()
    {
        if ($_POST['num'] && $_POST['num'] == 1) {
            $cart = M('cart');
            $uid = $_SESSION['user']['id'];
            $affectnum = $cart->where('uid=' . $uid)->delete();
            $totalprice = $cart->where('uid=' . $uid)->sum('subtotal');
            if ($affectnum) {
                $clear['total'] = $totalprice;
                $clear['ok'] = 'ok';
                $this->ajaxReturn($clear, 'JSON');
            }
        }
    }

    public function shopping_check()
    {

        $cartuser = M('cart');
        $goodsuser = M('goods');
        $userid = $_SESSION['user']['id'];
        $data = $cartuser->table('tb_goods,tb_cart')->where("tb_cart.gid=tb_goods.id and tb_cart.uid={$userid}")->select();
        $data1 = $cartuser->where('uid=' . $userid)->sum('subtotal');
        $this->assign('data1', $data1);
        $this->assign('data', $data);
        $aa = \Think\ Area::city();
        $this->assign('cit', $aa);
        $this->display();
    }


    public function address_add()
    {
        if ($_POST) {
            $user = M('user_detail');
            $data['province'] = $_POST['province'];
            $data['city'] = $_POST['city'];
            $data['county'] = $_POST['county'];
            $data['txtStreet'] = $_POST['txtStreet'];
            $address = $_POST['province'] . $_POST['city'] . $_POST['county'] . $_POST['txtStreet'];
            $data['detailaddr'] = $address;
            $data['uid'] = $_SESSION['user']['id'];
            $data['name'] = $_POST['txtName'];
            $data['postcode'] = $_POST['txtZip'];
            $data['telphone'] = $_POST['txtCell'];
            $userid = $_SESSION['user']['id'];
            if ($user->create($data)) {
                $user->add();
                $res = $user->where('uid=' . $userid)->select();
                $this->ajaxReturn($res, 'JSON');
            }
        }
    }

    public function address_check()
    {
        if ($_POST['num'] == 1) {
            $userid = $_SESSION['user']['id'];
            $address = M('user_detail');
            $data = $address->where('uid=' . $userid)->select();
            $this->ajaxReturn($data, 'JSON');

        }
    }

    public function address_del()
    {
        if ($_POST['id']) {
            $userid = $_SESSION['user']['id'];
            $address = M('user_detail');
            $affectRow = $address->where('id=' . $_POST['id'])->delete();
            if ($affectRow) {
                $data = $address->where('uid=' . $userid)->select();
                $this->ajaxReturn($data, 'JSON');

            }
        }
    }

    public function shopping_buy(){
        $cart=M('cart');
        $detail=M('detail');
        $hotgoods=M('hotgoods');
        $goods=M('goods');
        if ($_POST['payid']){
            $userid=$_SESSION['user']['id'];
            $data['userid']=$userid;
            $data['usertdetailid']=$_POST['addid'];
            $data['username']=$_SESSION['user']['username'];
            $data['ordertime']=time();
            $data['pay']=$_POST['payid'];
            $data['detailnum']=date('Ymd',time()).time();
            $info=$cart->where('uid='.$userid)->select();
            $sumprice = $cart->where('uid='.$userid)->sum('subtotal');
            $data['sumprice'] = $sumprice;
            if (count($info)>=2){
                foreach ($info as $item) {
                    $ordergid[]=$item['gid'];
                    $dnum[] = $item['buynum'];
                    $totalprice[] = $item['subtotal'];
                    $dprice[] = $item['gprice'];

                }

                $data['ordergid'] = implode(',',$ordergid);
                $data['dnum'] = implode(',',$dnum);
                $data['dprice'] = implode(',',$dprice);
                $data['totalprice'] = implode(',',$totalprice);

            }else{
                $data['ordergid'] = $info[0]['gid'];
                $data['dnum'] = $info[0]['buynum'];
                $data['dprice'] = $info[0]['gprice'];
                $data['totalprice'] = $info[0]['subtotal'];
                $data1['gid'] = $info[0]['gid'];
                $data1['sum'] = $info[0]['buynum'];
                if($hotgoods->create($data1)){
                    $hotgoods ->add();
                }
            }
            if($detail->create($data))
            {
                $detail->add();
                $goodsinfo = $goods->where('id='.$info[0]['gid'])->find();
                $goodsinfo['stocks'] = $goodsinfo['stocks'] - $info[0]['buynum'];
                $stock['stocks'] = $goodsinfo['stocks'];
                $stock['id'] = $info[0]['gid'];
                if($goods->create($stock)){
                    $goods->save();
                }
                $affectedNum = $cart->where('uid='.$userid)->delete();
                if($affectedNum){
                    $this ->ajaxReturn('ok');
                }
            }
        }

        if($_GET['id']){								//......
            $ordernum = $detail->where($_GET)->find();	//......
        }else{												//我改的
            $maxid = $detail->Max('id');
            $ordernum = $detail->where('id='.$maxid)->find();
        }
        $this->assign('info',$ordernum);
        $this ->display();
    }

    public function phones(){
        $a=I('rance');

        $goods=M('goods');
        if ($_SESSION['lookedid']){
            $_SESSION['lookedid']=array_unique($_SESSION['lookedid']);
            $idarr=$_SESSION['lookedid'];
            if (count($idarr)>5){
                array_shift($idarr);

            }
            $ids = implode(',',$idarr);
            $where['id'] = array('IN',$ids);
            $looked = $goods->where($where)->select();
            $this->assign('looked',$looked);


            $data2=$goods->where("id<5")->select();
            $this->assign('data2',$data2);
            $count=$goods->where("rance='{$a}'")->count();
            $Page= new \Think\Page($count,6);
            $data=$goods->where("rance='{$a}'and id>5")->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign("page",$Page->show());
            $this->assign('data',$data);
            $this->display();
        }



    }

    public function pm(){
        $n=$_POST['n'];
        $phone=M('goods');
        $rance=$_POST['rance'];
        $vest=$_POST['vest'];

        $count=$phone->where("rance='{$rance}' and id>5 and id<45")->count();
        $Page= new \Think\Page($count,6);
        $this->assign("page",$Page->show());
        switch ($n){
            case 0:
                $data=$phone->where("rance='{$rance}' and id>5 and id<45")->order('uptime')->limit($Page->firstRow.','.$Page->listRows)->select();
                $this->assign("page",$Page->show());
                $this->ajaxReturn($data);
                break;
            case 1:
                $data=$phone->where("rance='{$rance}' and id>5 and id<45 ")->order('price desc')->limit($Page->firstRow.','.$Page->listRows)->select();
                $this->ajaxReturn($data);
                break;
            case 2:
                $data=$phone->where("rance='{$rance}' and id>5 and id<45")->order('bynum desc')->limit($Page->firstRow.','.$Page->listRows)->select();
                $this->ajaxReturn($data);
                break;
            case 3:
                $data=$phone->where("rance='{$rance}' and id>5 and id<45")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
                $this->ajaxReturn($data);
                break;
        }


    }


    public function saler_mode()
    {
        $a=I('rance');
        $phone = M('goods');
        if($_SESSION['lookedid']){
            $_SESSION['lookedid'] = array_unique($_SESSION['lookedid']);
            $idarr = $_SESSION['lookedid'];
            if(count($idarr) > 5){
                array_shift($idarr);
            }
            $ids = implode(',',$idarr);
            $where['id'] = array('IN',$ids);
            $looked = $phone->where($where)->select();
            $this->assign('looked',$looked);
        }
        $data = $phone->where("rance='{$a}'")->select();
        $data2=$phone->where("id<5")->select();
        $this->assign('data2',$data2);
        $ha=$_GET['mid'];
        if($ha==null && $a==!null)
        {
            $this->assign('data',$data);
        }
        $this->display();
    }


    public function large_screen(){
        $big=I('vest');
        $goods=M('goods');
        if ($_SESSION['lookedid']){
            $_SESSION['lookedid']=array_unique($_SESSION['lookedid']);
            $idarr=$_SESSION['lookedid'];
            if (count($idarr)>5){
                array_shift($idarr);
            }
             $ids=implode(',',$idarr);
            $where['id']=array('in',$ids);
            $looked=$goods->where($where)->select();
            $this->assign('looked',$looked);

        }
        $count=$goods->where("vest='{$big}' and id>5 and id<45")->count();
        $page=new Page($count,6);
        $data3=$goods->table('tb_goods,tb_hotgoods')->where('tb_hotgoods.hot=4 and tb_hotgoods.gid=tv_goods.id')->select();
        $data=$goods->where("vest='{$big}' and and id>5")->order('id')->limit($page->firstRow.",".$page->listRows)->select();
        $data2=$goods->where("id>=45 and id<=49")->select();
        $this->assign('page',$page->show());
        $this->assign('data2',$data2);
        $this->assign('data',$data);
        $this->assign('data3',$data3);
        $this->display();
    }


}