<!doctype html>
<html lang="en" class="h-100">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Produk</title>
      <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
      <style>
         th{
            text-align: center;
         }
      </style>
   </head>
<body class="d-flex flex-column h-100">
   <main class="flex-shrink-0">
      <div class="container mt-5">
         <section id="section_artikel">
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-body">
                        <a href="{{ url('/product') }}" class="btn btn-md btn-success mb-3">Kembali</a>
                        <a href="{{ url('Tproduk/create') }}" class="btn btn-md btn-success mb-3">TAMBAH PRODUK</a>
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th scope="col">GAMBAR</th>
                                 <th scope="col">JUDUL</th>
                                 <th scope="col">ISI</th>
                                 <th scope="col">HARGA</th>
                                 <th scope="col">AKSI</th>
                              </tr>
                           </thead>
                           <tbody>
                              @forelse ($produks as $produk)
                              <tr>
                                 <td class="text-center">
                                    <img src="{{ Storage::url('public/produks/').$produk->gambar }}" class="rounded" style="width: 150px">
                                 </td>
                                 <td>{{ $produk->judul }}</td>
                                 <td>{!! $produk->isi !!}</td>
                                 <td>{!! $produk->harga !!}</td>
                                 <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Tproduk.destroy', $produk->id) }}" method="POST">
                                       <a href="{{ route('Tproduk.edit', $produk->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                 </td>
                              </tr>
                              @empty
                              <div class="alert alert-danger">
                                 Data artikel belum Tersedia.
                              </div>
                              @endforelse
                           </tbody>
                        </table>
                        {{ $produks->links() }}
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </main>
   <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('toastr/toastr.min.js') }}"></script>
   <script>
      @if(session()->has('success'))
      toastr.success('{{ session('success') }}', 'BERHASIL!');
      @elseif(session()->has('error'))
      toastr.error('{{ session('error') }}', 'GAGAL!');
      @endif
   </script>
</body>
</html>