<?php 
 $con=mysqli_connect("localhost","root","","art_galllery");
// GETTINFG THE USER IP ADDRESS
function getIp() {

    $ip = $_SERVER['REMOTE_ADDR'];

 

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];

    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

    }

 

    return $ip;

}

//getting the total added items
function total_items()
{
	if (isset($_GET['add_cart'])) {
		global $con;
		$ip=getIp();
		$get_items="select * from cart where ip_add='$ip'";
		$run_items=mysqli_query($con,$get_items);
		$count_items=mysqli_num_rows($run_items);
	                               }
	else 
	{
		global $con;
		$ip=getIp();
		$get_items="select * from cart where ip_add='$ip'";
		$run_items=mysqli_query($con,$get_items);
		$count_items=mysqli_num_rows($run_items);

	}

echo"$count_items";
		# code...
	}




function total_price()
{
	$total=0;
	global $con;
	$ip=getIp();
	$sel_price="select * from cart where ip_add='$ip'";
	$run_price=mysqli_query($con,$sel_price);
	if (!$run_price) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
	while ($p_price=mysqli_fetch_array($run_price)) 
	{
		$pro_id=$p_price['p_id'];
		$pro_price="select * from products where product_id='$pro_id'";
		$run_pro_price=mysqli_query($con,$pro_price);
		while ($pp_price=mysqli_fetch_array($run_pro_price))
		{
			$product_price=array($pp_price['product_price']);
			$values=array_sum($product_price);
			$total +=$values;
			
		}
	}
	echo "$".$total;
}












//CREATING THE SHOPPING CART
function cart()
{
	if (isset($_GET['add_cart'])) {
		global $con;
		$ip=getIp();
		$pro_id=$_GET['add_cart'];
		$check_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id'";
		$run_check=mysqli_query($con,$check_pro);
		if (mysqli_num_rows($run_check)>0) 
		{
			echo "";
		}
		else 
		{
			$insert_pro ="insert into cart(p_id,ip_add) values('$pro_id','$ip') ";
			$run_pro=mysqli_query($con,$insert_pro);
			echo "<script>window.open('ArtGalleryHome1.php','_self')</script>";
		}
	}
}






 function getCats()
	{
		global $con;
		$get_cats="select * from categories";
		$run_cats=mysqli_query($con,$get_cats);
		while ($row_cats=mysqli_fetch_array($run_cats)) 
		{
			$cat_id=$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
			echo "<a href='ArtGalleryHome1.php?cat=$cat_id' class='list-group-item'>$cat_title</a>";
		}


	}
	function getCats1()
	{
		global $con;
		$get_cats="select * from categories";
		$run_cats=mysqli_query($con,$get_cats);
		while ($row_cats=mysqli_fetch_array($run_cats)) 
		{
			$cat_id=$row_cats['cat_id'];
			$cat_title=$row_cats['cat_title'];
			echo "<a href='categoriesall.php?cat=$cat_id' class='list-group-item'>$cat_title</a>";
		}


	}



	function getPro()
	{
		if(!isset($_GET['cat']))
		{
				global $con;
				$get_pro="select * from products order by RAND() LIMIT 0,6";
				$run_pro=mysqli_query($con,$get_pro);
				while ($row_pro=mysqli_fetch_array($run_pro)) 
				{
					$pro_id=$row_pro['product_id'];
					$pro_cat=$row_pro['product_cat'];
					$pro_title=$row_pro['product_title'];
					$pro_price=$row_pro['product_price'];
					$pro_image=$row_pro['product_image'];
					echo"<div id='single_product'>
						<img src='admin/product_images/$pro_image' width='180px' height='180px'>
						<h3>$pro_title</h3>
						<p><b>Price: $ $pro_price</b></p>
						<a href='details.php?pro_id=$pro_id' style='float: left;'><button style='margin-right: 4px'>Details</button></a>
						<a href='ArtGalleryHome1.php?add_cart=$pro_id'><button style='float:right;'>Add to cart</button></a>
						
					</div>
			    	";
				
			            
				}
	    }
	}



	function getPro1()
	{
		if(!isset($_GET['cat']))
		{
				global $con;
				$get_pro="select * from products order by RAND() LIMIT 0,6";
				$run_pro=mysqli_query($con,$get_pro);
				while ($row_pro=mysqli_fetch_array($run_pro)) 
				{
					$pro_id=$row_pro['product_id'];
					$pro_cat=$row_pro['product_cat'];
					$pro_title=$row_pro['product_title'];
					$pro_price=$row_pro['product_price'];
					$pro_image=$row_pro['product_image'];
					echo"<div id='single_product'>
						<img src='admin/product_images/$pro_image' width='180px' height='180px'>
						<h3>$pro_title</h3>
						<p><b>Price: $ $pro_price</b></p>
						<a href='details.php?pro_id=$pro_id' style='float: left;'><button style='margin-right: 4px'>Details</button></a>
						<a href='categoriesall.php?add_cart=$pro_id'><button style='float:right;'>Add to cart</button></a>
						
					</div>
			    	";
				
			            
				}
	    }
	}		




	function getCatPro()
	{
		if(isset($_GET['cat']))
		{
			    $cat_id=$_GET['cat'];
				global $con;
				$get_cat_pro="select * from products where product_cat='$cat_id'";
				$run_cat_pro=mysqli_query($con,$get_cat_pro);
				$count_cats =mysqli_num_rows($run_cat_pro);
				if ($count_cats==0) {
					echo"<h2> there is no product in this category!</h2>";
					# code...
				}
				while ($row_cat_pro=mysqli_fetch_array($run_cat_pro)) 
				{
					$pro_id=$row_cat_pro['product_id'];
					$pro_cat=$row_cat_pro['product_cat'];
					$pro_title=$row_cat_pro['product_title'];
					$pro_price=$row_cat_pro['product_price'];
					$pro_image=$row_cat_pro['product_image'];
					if ($count_cats==0) {
					echo"<h2> there is no product in this category</h2>";
					
				                        }
				    else{                    
					echo"<div id='single_product'>
						<img src='admin/product_images/$pro_image' width='180px' height='180px'>
						<h3>$pro_title</h3>
						<p><b> $ $pro_price</b></p>
						<a href='details.php?pro_id=$pro_id' style='float: left;'><button style='margin-right: 4px'>Details</button></a>
						<a href='ArtGalleryHome1.php?add_cart=$pro_id'><button style='float:right;'>Add to cart</button></a>
						
					</div>
			    	";
			    	   }
				
			            
				}
	    }
	}



function getCatPro1()
	{
		if(isset($_GET['cat']))
		{
			    $cat_id=$_GET['cat'];
				global $con;
				$get_cat_pro="select * from products where product_cat='$cat_id'";
				$run_cat_pro=mysqli_query($con,$get_cat_pro);
				$count_cats =mysqli_num_rows($run_cat_pro);
				if ($count_cats==0) {
					echo"<h2> there is no product in this category!</h2>";
					# code...
				}
				while ($row_cat_pro=mysqli_fetch_array($run_cat_pro)) 
				{
					$pro_id=$row_cat_pro['product_id'];
					$pro_cat=$row_cat_pro['product_cat'];
					$pro_title=$row_cat_pro['product_title'];
					$pro_price=$row_cat_pro['product_price'];
					$pro_image=$row_cat_pro['product_image'];
					if ($count_cats==0) {
					echo"<h2> there is no product in this category</h2>";
					
				                        }
				    else{                    
					echo"<div id='single_product'>
						<img src='admin/product_images/$pro_image' width='180px' height='180px'>
						<h3>$pro_title</h3>
						<p><b> $ $pro_price</b></p>
						<a href='details.php?pro_id=$pro_id' style='float: left;'><button style='margin-right: 4px'>Details</button></a>
						<a href='categoriesall.php?add_cart=$pro_id'><button style='float:right;'>Add to cart</button></a>
						
					</div>
			    	";
			    	   }
				
			            
				}
	    }
	}



function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}	






?>
