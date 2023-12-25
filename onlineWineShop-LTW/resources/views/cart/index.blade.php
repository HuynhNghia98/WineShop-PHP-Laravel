@extends('layout.app')
@section('content')
    <section class="bg-seaShell py-3">
        <div class="container">
            <div class="fs-3 text-danger fw-bold bg-white p-3 mb-3" style="border-top: 3px solid var(--color-red);">
                Your Cart
            </div>
            <div class="container bg-white py-3 fw-bold">
                <div class="row">
                    <div class="col-3 col-md-6 px-3 px-md-5">Products</div>
                    <div class="col-2 col-md text-center">Price</div>
                    <div class="col-2 col-md text-center">Quantity</div>
                    <div class="col-2 col-md text-center ps-4 ps-md">Total</div>
                    <div class="col-2 col-md text-center">Operation</div>
                </div>
            </div>

            <div class="container bg-white py-3 my-3">
                @foreach ($viewData['products'] as $product)
                    <div class="row">
                        <div class="d-block d-md-none">
                            <a class="text-decoration-none text-danger fw-bold"
                                href="{{ route('customer.product.detail', ['id' => $product->getId()]) }}">
                                <p class="m-0">{{ $product->getName() }}</p>
                            </a>
                        </div>
                        <div class="col-3 col-md-6 px-3 px-md-5">
                            <div class="row py-3">
                                <div class="col-md-2">
                                    <a href="{{ route('customer.product.detail', ['id' => $product->getId()]) }}"><img
                                            class="img-fluid" style="height:80px;width:60px;"
                                            src="{{ asset('/storage/' . $product->getImage()) }}" alt="Image"></a>
                                </div>
                                <div class="col-md">
                                    <a class="text-decoration-none text-danger fw-bold d-none d-md-block"
                                        href="{{ route('customer.product.detail', ['id' => $product->getId()]) }}">
                                        <p class="m-0">{{ $product->getName() }}</p>
                                    </a>
                                    <p class="m-0 text-prey d-none d-md-block">Category:
                                        {{ $product->getCategory()->getName() }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md text-center" style="padding-top: 42px;">
                            <p id="price_{{ $product->getId() }}">{{ $product->getPrice() }}</p>
                        </div>

                        {{-- quantity --}}
                        <div class="col col-md text-center" style="padding-top: 42px;">
                            <button id="minusBtn_{{ $product->getId() }}" class="border" role="button"><i
                                    class="fa-solid fa-minus"></i></button>
                            <input name="quantity" id="quantityInput_{{ $product->getId() }}" class="border-0 text-center"
                                style="width: 35px;" value="{{ session('products')[$product->getId()] }}">

                            <button id="plusBtn_{{ $product->getId() }}" class="border" role="button"><i
                                    class="fa-solid fa-plus"></i></button>
                        </div>

                        <div class="col col-md text-center" style="padding-top: 42px;">
                            $<span
                                id="total_{{ $product->getId() }}">{{ $product->getPrice() * session('products')[$product->getId()] }}</span>
                        </div>
                        <div class="col col-md text-center" style="padding-top: 35px;">
                            <a href="{{ route('cart.deleteItemInCart', ['id' => $product->getId()]) }}">
                                <button type="submit" class="border-0 btn">
                                    <i class="fa-solid fa-trash-can text-danger"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container bg-white p-3">
                <div class="text-end my-2">
                    <strong class="fs-5 text-danger">
                        Total to Pay:
                    </strong>
                    <span class="text-danger fs-5">$<input id="totalofCart" class="border-0 text-danger fs-5"
                            style="width: 70px;" type="text" value="{{ $viewData['total'] }}" disabled /></span>
                </div>

                <div class="text-end">

                    @if (count($viewData['products']) > 0)
                        <a href="{{ route('cart.purchase') }}" class="btn btn-primary text-white mb-2">
                            Purchase
                        </a>
                        <a class="text-decoration-none" href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2">
                                Remove all
                            </button>
                        </a>
                    @endif
                    <a href="{{ route('customer.product.index') }}">
                        <button class="btn btn-dark mb-2">
                            Back to Product Page
                        </button>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
@section('scripts')
    <script>
        // Lấy tất cả các nút "minus" và "plus"
        const minusButtons = document.querySelectorAll('[id^="minusBtn_"]');
        const plusButtons = document.querySelectorAll('[id^="plusBtn_"]');
        const quantityInputs = document.querySelectorAll('[id^="quantityInput_"]');
        const prices = document.querySelectorAll('[id^="price"]');
        const totalElements = document.querySelectorAll('[id^="total_"]');
        const delButtons = document.querySelectorAll('[id^="delBtn"]');
        const totalofCartInput = document.getElementById('totalofCart');

        // Lặp qua tất cả các nút "minus" và thêm sự kiện click
        minusButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const currentValue = parseInt(quantityInputs[index].value);
                if (currentValue > 1) {
                    quantityInputs[index].value = currentValue - 1;
                    updateTotal(index);
                    updateSession(index);
                }
            });
        });

        // Lặp qua tất cả nút "plus" và thêm sự kiện click
        plusButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                const currentValue = parseInt(quantityInputs[index].value);
                quantityInputs[index].value = currentValue + 1;
                updateTotal(index);
                updateSession(index);
            });

        });

        // Lặp qua tất cả các input quantity và thêm sự kiện input
        quantityInputs.forEach((input, index) => {
            input.addEventListener('change', () => {
                const currentValue = parseInt(input.value);
                if (currentValue >= 1) {
                    updateTotal(index);
                    updateSession(index);
                }
            });
        });

        // Hàm cập nhật tổng dựa trên chỉ số sản phẩm
        function updateTotal(index) {
            const quantity = parseInt(quantityInputs[index].value);
            const price = parseFloat(prices[index].textContent);
            totalElements[index].textContent = (quantity * price).toFixed(2);
            calTotalOfCart();
        }

        function calTotalOfCart() {
            let total = 0;
            totalElements.forEach(e => {
                total += parseFloat(e.textContent);
            });
            totalofCartInput.value = total.toFixed(2);
        }

        // Hàm cập nhật session dựa trên chỉ số sản phẩm
        function updateSession(index) {
            const productId = quantityInputs[index].id.split('_')[1];
            const newQuantity = quantityInputs[index].value;
            const csrfToken = "{{ csrf_token() }}";

            // Sử dụng Ajax để gửi yêu cầu cập nhật session
            $.ajax({
                url: '/cart/updateQuantity/' + productId, // Đảm bảo URL này khớp với route của bạn
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken, // Đưa CSRF Token vào tiêu đề
                },
                data: {
                    quantity: newQuantity
                },
                success: function(response) {
                    // Xử lý phản hồi từ máy chủ (nếu cần)
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>
@endsection
@endsection
