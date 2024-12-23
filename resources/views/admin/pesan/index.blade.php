<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td width="100px">#</td>
                        <td width="250px">Name</td>
                        <td>Message</td>
                        <td>Action</td>
                    </tr>

                    @foreach ( $pesan as $item )
                    
                    <tr style="{{ $item->is_read == 1 ? 'background-color: #e4e4e4' : '' }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="/admin/pesan/{{ $item->id }}"><b>{{ $item->name }}</b></a>
                        </td>
                        <td> {!! Illuminate\Support\Str::limit($item->desc, 100) !!}</td>
                        <td>

                            <form action="/admin/pesan/{{ $item->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> </i> Hapus</button>
                            </td>
                        </form>
                    </tr>
                    

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>