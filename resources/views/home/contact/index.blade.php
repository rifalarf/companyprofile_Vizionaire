<div class="container">

    <div class="text-center my-5">
        <h4 class="">Kontak Kami</h4>
        <p>Berikan saran dan masukan untuk kami</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/contact/send" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" placeholder="Masukan Nama Anda">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Isi Pesan Yang Anda Ingin Sampaikan</label>
                                <textarea name="desc" id="" cols="30" rows="10"
                                    class="form-control @error('desc') is-invalid @enderror" placeholder="Masukan Pesan Anda"></textarea>
                                @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success mt-4">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex">
                        <i class="fas fa-phone fa-2x px-3"></i>
                        <h3>+62 123 456 789</h3>
                    </div>

                    <div class="d-flex mt-3">
                        <i class="fas fa-envelope fa-2x px-3"></i>
                        <h3>bHj0k@example.com</h3>
                    </div>

                    <div class="d-flex mt-3">
                        <i class="fas fa-map-marker fa-2x px-3"></i>
                        <h3>Jl. Garut No. 1</h3>
                    </div>
                </div>

            </div>
        </div>
