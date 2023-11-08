@extends('layouts.admin.panel')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ürün Ekle</h1>
    <p class="mb-4">Bu sayfadan ürün ekleyebilirsiniz.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ürün Ekle</h6>
        </div>
        <div class="card-body">
            <form action="{{route('admin.products.store')}}" method="POST">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="">Adı</label>
                            <input type="text" name="name" placeholder="Ürün Adı" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Fiyat</label>
                            <input type="text" name="price" placeholder="Ürün Fiyatı" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">İndirimli Fiyat</label>
                            <input type="text" name="discount_price" placeholder="İndirimli Ürün Fiyatı" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Stok</label>
                            <input type="text" name="stock_qty" placeholder="Stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Açıklama</label>
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Açıklama" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Seo Kelimeleri</label>
                            <input type="text" name="seo_keywords" placeholder="Stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">SEO Açıklama</label>
                            <textarea name="seo_description" id="seo_description" cols="30" rows="10" placeholder="Seo Açıklama" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Öncelik</label>
                            <input type="text" name="priority" placeholder="Öncelik" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="is_published"><label for="" class="ml-2">Yayınla</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="is_featured"><label for="" class="ml-2">Öne Çıkar</label>
                        </div>
                        <button class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
                
                

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection