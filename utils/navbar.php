<?php
if (isset($_POST['nutdx'])) {
	session_unset();
}
?>
<div class="navbar">
	<div class="logo">
		<a href="./"><img src="images/logo.png" width="185px"></a>
	</div>
	<nav>
		<ul id="MenuItems" class="menu-items">
			<li><a href="./">Trang chủ</a></li>
			<li><a href="index.php?action=sanpham">Sản phẩm</a></li>
			<li><a href="index.php?action=gioithieu">Giới thiệu</a></li>
			<li><a href="index.php?action=lienhe">Liên hệ</a></li>
			<?php
					if (isset($_SESSION['tennd'])) {
						if ($_SESSION['quyennd'] == 1) {
					?>
				<li class="navbar__user">
					<a class="nav-link active" aria-current="page" href="#">Xin chào1 <?php echo $_SESSION['tennd']; ?>
				</a>
					<ul class="navbar__user-menu">
						<li class="navbar__user-menu-item">
							<a href="https://github.com/haduc25">Tài khoản của tôi</a>
						</li>
						<li class="navbar__user-menu-item"><a class="nav-link active" aria-current="page" href="index.php?action=quantri">Quản trị</a></li>
						<li class="navbar__user-menu-item">
							<a href="">Đơn mua</a>
						</li>
						<li
							class="navbar__user-menu-item navbar__user-menu-item--separate"
						>
							<form method="post"><input class="btn-dangxuat" type="submit" name="nutdx" value="Đăng xuất"></form>
						</li>
					</ul>
				</li>

			<?php
						} else {
		?>
			<li><a class="nav-link nav-link__active" aria-current="page" href="#">Xin chào2 <?php echo $_SESSION['tennd']; ?></li>
			</a>
			<li>
				<form method="post"><input class="btn-dangxuat" type="submit" name="nutdx" value="Đăng xuất"></form>
			</li>

		<?php

						}
					} else {
		?>
		<a class="nav-link" href="index.php?action=dangnhap">Đăng nhập</a>
	<?php
					} ?>
	</li>

		</ul>
	</nav>
	<a href="index.php?action=giohang"><img src="images/cart.png" width="30px" height="30px"></a>
	<img src="images/menu.png" class="menu-icon" onClick="menutoggle()">
</div>