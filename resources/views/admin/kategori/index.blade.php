<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/posts/kategori/create" class="btn btn-primary mb-3">Tambah <i class="fa fa-plus"></i></a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        
                        <td>Action</td>
                    </tr>
                    @foreach ($kategori as $item)
                        
                    
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->name }}</td>
                        
                        <td>
                            <div class="d-flex">

                                <a href="/admin/posts/kategori/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fa fa-edit"> </i> Edit</a>
                                
                                <form action="/admin/posts/kategori/{{ $item->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> </i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>