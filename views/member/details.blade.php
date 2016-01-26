<div class="backwhite">
    <div class="top-list container">
        <h2 class="title"><i class="fa fa-history"></i> &nbsp;Daftar Pembelian</h2>
        <div class="clr"></div>
        <hr>
    </div>
    <div class="container" >
        <div class="row mp">
            <div class="col-sm-3">
                <div class="left-account">
                    <h3>My Account</h3>
                    <ul class="navigation">
                        <li><a href="{{url('member')}}">Daftar Pembelian</a></li>
                        <li><a href="{{url('member/profile/edit')}}">Ubah Profil</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="single-page">
                    @if($pengaturan->checkoutType!=2)
                        @if(list_order()->count())
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><span>ID Order</span></th>
                                        <th><span>Tanggal Order</span></th>
                                        <th><span>Detail Order</span></th>
                                        <th><span>Total Order</span></th>
                                        <th><span>No. Resi</span></th>
                                        <th><span>Status</span></th>
                                        <th><span>Konfirmasi</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (list_order() as $item)
                                    <tr>
                                        <td>{{$pengaturan->checkoutType==1 ? prefixOrder().$item->kodeOrder : '-'}}</td>
                                        <td>{{$pengaturan->checkoutType==1 ? waktu($item->tanggalOrder) : '-'}}</td>
                                        <td class="desc">
                                            <ul>
                                            @if($pengaturan->checkoutType==1) 
                                                @foreach ($item->detailorder as $detail)
                                                <li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
                                                @endforeach 
                                            @endif
                                            </ul>
                                        </td>
                                        <td class="quantity">{{ price($item->total) }}</td>
                                        <td class="sub-price">{{ $item->noResi }}</td>
                                        <td class="total-price">
                                        @if($pengaturan->checkoutType==1) 
                                            @if($item->status==0)
                                            <span class="label label-warning">Pending</span>
                                            @elseif($item->status==1)
                                            <span class="label label-danger">Konfirmasi diterima</span>
                                            @elseif($item->status==2)
                                            <span class="label label-info">Pembayaran diterima</span>
                                            @elseif($item->status==3)
                                            <span class="label label-success">Terkirim</span>
                                            @elseif($item->status==4)
                                            <span class="label label-default">Batal</span>
                                            @endif 
                                        @endif
                                        </td>
                                        <td class="center">
                                        @if($pengaturan->checkoutType==1) 
                                            @if($item->status < 1)
                                            <button onclick="window.open('{{url('konfirmasiorder/'.$item->id)}}','_blank')" class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="fa fa-check"></i></button>
                                            @endif 
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pages custom-font-1">{{list_order()->links()}}</div>
                        @else
                        <p class="italic"> Belum ada data order</p>
                        @endif
                    @endif 
                </div>
            </div>
        </div>
    </div>
</div>