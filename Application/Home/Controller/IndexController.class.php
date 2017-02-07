<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Think;

class IndexController extends Controller
{
    public function index(){
        $this->display();
    }
    public function hot_store(){
       $vs=$_GET['vest'];
        $user=M('goods');
        $hotuser=M('hotgoods');
        if ($_SESSION['lookedid']){
          $_SESSION['lookedid']=  array_unique($_SESSION['lookedid']);
            $idarr=$_SESSION['lookedid'];
            if (count($idarr)>5){
                array_shift($idarr);
            }
            $ids=implode(',',$idarr);
            $where['id']=array('in',$ids);
            $looked=$user->where($where)->select();
            $this->assign('looked',$looked);
        }
        $this->assign('data',$user->where('id>=45 and id<=49')->select());
        $count=$user->where("vest='{$vs}' and id>5 and id<45")->count();
        $page=new Page($count,6);
        $data1=$user->where("vest='{$vs}' and id>5 and id<45")->order('id')->limit($page->firstRow.','.$page->listRows)->select();
        $hot = $hotuser->table('tb_goods,tb_hotgoods')->where('tb_hotgoods.id <=3 and tb_hotgoods.hot=4 and tb_hotgoods.gid=tb_goods.id')->select();
        $this->assign('data2',$hot);
        $this->assign('data1',$data1);
        $this->assign("page",$page->show());
    }

    public function zte_first(){
        $user=M('goods');
        $data=$user->table('tb_goods,tb_hotgoods')->where('tb_hotgoods.hot=4 and tb_hotgoods.gid=tb_goods.id')->select();
      $hots= $user->where('hot=2')->select();
        $this->assign('data1',$data);
        $this->assign('hot',$hots);
        $this->assign('data',$user->select());
        $this->display();


    }

    public function detail(){
       $goods= M('goods');
        $id=$_GET['id'];
        if ($id){
        $_SESSION['lookedid'][]=$id;
        $_SESSION['lookedid']=array_unique($_SESSION['lookedid']);
        $idarr=$_SESSION['lookedid'];
        if (count($idarr)>5){
            array_shift($idarr);
        }
        $ids=implode(',',$idarr);
        $where['id']=array('in',$ids);
        $looked=$goods->where($where)->select();
        $this->assign('looked',$looked);
        $data6=$goods->table('tb_goods a,tb_suits b')->where("a.id='{$id}' and a.id=b.gid")->find();
        $this->assign('data6',$data6);
        $com=M('comment');
        $count=$com->where("gid='{$id}'")->count();
        $count0=$com->where("gid='{$id}' and com_level=1")->count();
        $count1=$com->where("gid='{$id}' and com_level=2")->count();
        $count2=$com->where("gid='{$id}' and com_level=3")->count();
        $this->assign('count2',$count2);
        $this->assign('count1',$count1);
        $this->assign('count0',$count0);
        $this->assign('count',$count);
        $this -> assign('data',$goods->select());
        $this -> assign('data1',$goods->where('id='.$id)->find());
        $d = $goods->where('id='.$id)->find();
        $pic = explode(',',$d['pic']);
        $this -> assign('pic',$pic);
        $num = count($pic);
        $this -> assign('num',$num);
        $this -> display();
        }else{
            $this->error('id 不能为空');
        }

    }


    public function cart(){
        $user=M('goods');
        $this->assign('data',$user->select());
        $userid=$_SESSION['user']['id'];
        $cart=M('cart');
        $data['gid']=$_POST['id'];
        $ids=$cart->where('id='.$data['gid'])->find();
        $goodsinfo=$user->where('id='.$data['gid'])->find();
        if ($ids){
            $data1['buynum']=($ids['buynum'])+1;
            $data1['subtotal']=$data1['buynum']*$goodsinfo['price'];
            $data1['id']=$ids['id'];
            if ($cart->create($data1)){
                $cart->save();
            }

        }else{
            $data['uid']=$userid;
            $data['gprice']=$goodsinfo['price'];
            $data['buynum']=$_POST['num'];
            if ($_POST['tc']){
                $data['subtotal'] = $data['buynum']*($goodsinfo['price']+$_POST['tc']);
            }else{
                $data['subtotal'] = $data['buynum']*$goodsinfo['price'];
            }
            if($cart -> create($data)){
                $cart -> add();
            }
        }

        $id = $cart->field('gid')->select();
        foreach($id as $k){
            foreach($k as $num){
                $m[] = $num;
            }
        }
        $nums = implode(',',$m);
        $this ->assign('info',$user->table('tb_goods,tb_cart')->where('tb_cart.gid=tb_goods.id and tb_cart.uid='.$userid)->select());
        $this ->assign('total',$cart->where('uid='.$userid)->sum('subtotal'));
        $this ->display();
    }


    public function cartdel(){
        if ($_POST['id']){
            $cart=M('cart');
            $affectnum=$cart->where('id='.$_POST['id'])->delete();
        }
        if ($affectnum){
            $userid=$_SESSION['user']['id'];
            $data=$cart->where('uid='.$userid)->sum('subtotal');
            $clear['total'] = $data;
            $clear['ok'] = 'ok';
            $this -> ajaxReturn($clear,'JSON');
        }else{
            $this -> error('商品删除失败');
        }
    }

    public function cartnum(){
        if($_POST['addnum'] && $_POST['id'])
        { $goodsuser = M('goods');
            $cart = M('cart');
            $data['buynum'] = $_POST['addnum'];
            $data['id'] = $_POST['id'];
            $data1 = $cart -> where('id='.$data['id'])->find();
            $goodsid = $data1['gid'];
            $store = $goodsuser->where('id='.$goodsid)->find();
            if($data['buynum'] >= $store['stocks']){
                $data['buynum'] = $store['stocks'];
            }

            $data['subtotal'] = $data1['gprice']*$data['buynum'];
            if($cart -> create($data))
            {
                $cart -> save();
            }
            $info = $cart -> where('id='.$data['id'])->find();
            $uid = $_SESSION['user']['id'];
            $totalprice = $cart->where('uid='.$uid)->sum('subtotal');
            $map['totalprice'] = '￥'.$totalprice;
            $map['total'] = '￥'.$info['subtotal'];
            $map['store'] = $store['stocks'];
            $this -> ajaxReturn($map,'JSON');

        }

    }

    public function cartclear(){
        if ($_POST['num']&&$_POST['num']==1){
            $cart=M('cart');
            $uid=$_SESSION['user']['id'];
            $affectnum=$cart->where('uid='.$uid)->delete();
            $totalprice=$cart->where('uid='.$uid)->sum('subtotal');
            if($affectnum)
            {  $clear['total'] = $totalprice;
                $clear['ok'] = 'ok';
                $this -> ajaxReturn($clear,'JSON');
            }
        }
    }
    public function shopping_check(){

        $cartuser = M('cart');
        $goodsuser = M('goods');
        $userid = $_SESSION['user']['id'];
        $data = $cartuser->table('tb_goods,tb_cart')->where("tb_cart.gid=tb_goods.id and tb_cart.uid={$userid}")->select();
        $data1 = $cartuser->where('uid='.$userid)->sum('subtotal');
        $this ->assign('data1',$data1);
        $this ->assign('data',$data);
        $aa =\Think\ Area::city();
        $this -> assign('cit',$aa);
        $this -> display();
    }
	
	
	public function address_add(){
	if($_POST)	
	{ $user = M('user_detail');
      $data['province'] = $_POST['province'];
      $data['city'] = $_POST['city'];
      $data['county'] = $_POST['county'];
      $data['txtStreet'] = $_POST['txtStreet'];
	  $address = $_POST['province'].$_POST['city'].$_POST['county'].$_POST['txtStreet'];
   	  $data['detailaddr'] = $address;
	  $data['uid'] = $_SESSION['user']['id'];
	  $data['name'] = $_POST['txtName'];
	  $data['postcode'] = $_POST['txtZip'];
	  $data['telphone'] = $_POST['txtCell'];
	  $userid = $_SESSION['user']['id'];
	if($user -> create($data))
	{
		$user ->add();  
		$res = $user ->where('uid='.$userid)->select();
        $this -> ajaxReturn($res,'JSON');
	} 	  
	}		
	}
	
}