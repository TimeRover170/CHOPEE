<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        KERANJANG
                    </div>
                    <div class="card-body">
                        {{ $jumlah }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Belanjaan Saya
                    </div>
                    <div class="card-body">
                        @foreach ($datas as $item)
                            <p>{{ $item->nama_barang }}

                            
                            <button class="float-end btn btn-danger" wire:click="hapus('{{ $item->id }}')">X</button>
                            </p>                      
                            
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-9">
            <div class="card">
                    <div class="card-header">
                        Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/stylush.jpeg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Stylush Pen</h5>
                                        <p class="card-text">Pen untuk handphone/tablet</p>
                                </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Rp. 20.000</li>
                                    </ul>
                                <div class="card-body">
                                    <button class="btn btn-primary" wire:click="simpan('Stylush Pen', '20000')">Beli</button>
                                </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/gunting.jpeg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Gunting</h5>
                                            <p class="card-text">Alat untuk memotong</p>
                                    </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 13.000</li>
                                        </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Gunting', '13000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/casing.jpeg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Casing Hp</h5>
                                            <p class="card-text">Casing lucu untuk hp Realme C15</p>
                                    </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 25.000</li>
                                        </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Casing Hp', '25000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card">
                                    <img src="{{ asset('gambar/sepatu.jpeg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Sepatu</h5>
                                            <p class="card-text">Sepatu keren nan cakep</p>
                                    </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 750.000</li>
                                        </ul>
                                    <div class="card-body">
                                        <button class="btn btn-primary" wire:click="simpan('Sepatu', '750000')">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


