<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
			@if(auth()->user()->role=='admin')
			<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
			<li>
				<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Manajemen User</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages" class="collapse ">
					<ul class="nav">
						<li><a href="/siswa" class="">Siswa</a></li>
						<li><a href="/guru" class="">Guru</a></li>
					</ul>
				</div>
			</li>
			<li><a href="/soal" class=""><i class="lnr lnr-user"></i> <span>Soal</span></a></li>
			<li><a href="/mapel" class=""><i class="lnr lnr-user"></i> <span>Mata Pelajaran</span></a></li>
			<li><a href="/seluruhnilai" class=""><i class="lnr lnr-user"></i> <span>Nilai</span></a></li>
			<li><a href="/seluruhtoken" class=""><i class="lnr lnr-user"></i> <span>Token Ujian</span></a></li>
			@endif
			@if(auth()->user()->role=='guru')
			<li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
			<li><a href="/soal" class=""><i class="lnr lnr-user"></i> <span>Soal</span></a></li>
			<li><a href="/nilai2" class=""><i class="lnr lnr-user"></i> <span>Nilai</span></a></li>
			<li><a href="/token" class=""><i class="lnr lnr-user"></i> <span>Token Ujian</span></a>
			@endif
			@if(auth()->user()->role=='siswa')
			<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
			@endif
			</ul>
		</nav>
	</div>
</div>
