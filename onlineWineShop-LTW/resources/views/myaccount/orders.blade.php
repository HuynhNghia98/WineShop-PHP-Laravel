@extends('layout.app')
@section('content')
    <section class="bg-seaShell py-3">
        <div class="container">
            <div class="fs-3 text-danger fw-bold bg-white p-3 mb-3" style="border-top: 3px solid var(--color-red);">
                Your Orders
            </div>
            @forelse ($viewData["orders"] as $order)
                <div class="bg-white py-4 px-5 mb-4 border">
                    <div class="text-danger fs-5" style="border-bottom: 1px solid var(--color-red);">
                        <strong>Order #{{ $order->getId() }}</strong>
                    </div>
                    <div class="my-2">
                        <strong>Date:</strong> {{ $order->getCreatedAt() }}<br />
                        <strong>Total:</strong> <span class="text-danger fs-5">${{ $order->getTotal() }}</span><br />

                        <div class="container bg-white py-3 fw-bold">
                            <div class="row mb-4 border-bottom">
                                <div class="col col-md-5 px-md-5">Products</div>
                                <div class="col col-md text-center">Price</div>
                                <div class="col col-md text-center">Quantity</div>
                                <div class="col col-md text-center">Total</div>
                            </div>
                            @foreach ($order->getItems() as $item)
                                <div class="row mb-4">
                                    <div class=""><a class="text-decoration-none text-danger d-block d-md-none"
                                            style="font-size: 12px;"
                                            href="{{ route('customer.product.detail', ['id' => $item->getProduct()->getId()]) }}">{{ $item->getProduct()->getName() }}
                                        </a></div>
                                    <div class="col col-md-5 px-md-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a
                                                    href="{{ route('customer.product.detail', ['id' => $item->getProductId()]) }}"><img
                                                        class="img-fluid" style="height:80px;width:60px;"
                                                        src="{{ asset('/storage/' . $item->getProduct()->getImage()) }}"
                                                        alt="Image"></a>
                                            </div>
                                            <div class="col">
                                                <div class=""><a
                                                        class="text-decoration-none text-danger d-none d-md-block"
                                                        href="{{ route('customer.product.detail', ['id' => $item->getProduct()->getId()]) }}">{{ $item->getProduct()->getName() }}
                                                    </a></div>

                                                <div class="fw-normal d-none d-md-block">Category:
                                                    {{ $item->getProduct()->getCategory()->getName() }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-md text-center fw-normal" style="margin-top: 22px;">
                                        ${{ $item->getPrice() }}</div>
                                    <div class="col col-md text-center fw-normal" style="margin-top: 22px;">
                                        {{ $item->getQuantity() }}</div>
                                    <div class="col col-md text-center fw-normal" style="margin-top: 22px;">
                                        ${{ $item->getPrice() * $item->getQuantity() }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger" role="alert">
                    Seems to be that you have not purchased anything in our store =(.
                </div>
                <div>
                    <a class="btn btn-danger text-white px-3 py-2" href="{{ route('customer.product.index') }}">Buy Now
                        Baby</a>
                </div>
            @endforelse
        </div>
    </section>

@endsection
