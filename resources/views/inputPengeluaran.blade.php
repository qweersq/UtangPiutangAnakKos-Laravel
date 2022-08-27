@extends('layout.NavSideBar')

@section('content')
    <section class="content">
        <h1>Input Pengeluaran</h1>
        <script>
            document.getElementById("TopTitle").innerHTML = 'Input Pengeluaran';
            document.getElementById("menuAktif").innerHTML =
                '<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> <li id="beranda" class="nav-item"> <a href="/" class="nav-link"> <i class="nav-icon fas fa-tachometer-alt"></i> <p>Summary</p> </a> </li> <li id="beranda" class="nav-item"> <a href="/input-pengeluaran" class="nav-link active"> <i class="nav-icon fas fa-inbox"></i> <p>Input Pengeluaran</p> </a> </li> </ul>';
        </script>
    </section>
@endsection
