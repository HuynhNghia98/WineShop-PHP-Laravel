 @extends('layout.admin')
 @section('title', 'Product Management')
 @section('admincontent')
     <div class="content-wrapper">
         <div class="content-header">
             <div class="container-fluid">
                 <div class="row mb-3">
                     <div class="col-sm-6">
                         <h1 class="m-0"><strong>Product Management</strong></h1>
                     </div>
                     <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                             <li class="breadcrumb-item active">Product</li>
                         </ol>
                     </div>
                 </div>
             </div>

             <div class="card rounded-0 border-0">
                 <div class="card-body">
                     <div class="row mb-2 border-bottom pb-2">
                         <div class="col-sm-12 col-md-6">
                             <!-- Tao product -->
                             <div class="dt-buttons btn-group flex-wrap">
                                 <div class="text-end">
                                     @if (auth()->user()->getRole() == 'admin')
                                         <!-- Kiểm tra xem người dùng có vai trò admin hay không -->
                                         <a class="btn btn-success py-2 " href="{{ route('admin.product.create') }}"><i
                                                 class="fa-regular fa-square-plus fs-4"></i> Create
                                             New Product</a>
                                     @endif
                                 </div>
                             </div>
                         </div>
                     </div>
                     <table id="myTable" class="table table-striped table-bordered">
                         <thead>
                             <tr>
                                 <th class="bg-beige" style="width: 3%;">
                                     ID
                                 </th>
                                 <th class="bg-beige" style="width: 6%;">
                                     Image
                                 </th>
                                 <th class="bg-beige" style="width: 30%">
                                     Name
                                 </th>
                                 <th class="bg-beige" style="width: 15%">
                                     Category
                                 </th>
                                 <th class="bg-beige" style="width: 10%">
                                     Quantity
                                 </th>
                                 <th class="bg-beige" style="width: 10%">
                                     Price
                                 </th>
                                 <th class="bg-beige" style="width: 20%;">
                                 </th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($viewData['products'] as $item)
                                 <tr>
                                     <td>
                                         {{ $item->getId() }}
                                     </td>
                                     <td>
                                         <img class="img-fluid" style="width: 100%;height:70px;"
                                             src="{{ asset('/storage/' . $item->getImage()) }}" alt="Image">
                                     </td>
                                     <td>
                                         {{ $item->getName() }}
                                     </td>
                                     <td>
                                         {{ $item->getCategory()->getName() }}
                                     </td>
                                     <td>
                                         {{ $item->getQuantity() }}

                                     </td>
                                     <td>
                                         {{ $item->getPrice() }}
                                     </td>
                                     <td class="text-center" style="max-width: 200px;">
                                         <div class="mt-3">
                                             <a href="{{ route('admin.product.detail', ['id' => $item->getId()]) }}"
                                                 class="btn btn-dark px-2 py-1">
                                                 <i class="fa-solid fa-bars"></i>
                                             </a>
                                             <a href="{{ route('admin.product.edit', ['id' => $item->getId()]) }}"
                                                 class="btn btn-warning px-2 py-1">
                                                 <i class="fa-solid fa-pen-to-square text-white"></i>
                                             </a>
                                             <a href="{{ route('admin.product.delete', ['id' => $item->getId()]) }}"
                                                 class="btn btn-outline-danger px-2 py-1">
                                                 <i class="fa-solid fa-trash-can text-danger"></i>
                                             </a>
                                         </div>

                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 @endsection
 @section('script')
     <script>
         $(document).ready(function() {
             // Lắng nghe sự kiện khi một mục trong danh sách Filter được chọn
             $('.fil').click(function() {
                 // Lấy giá trị của mục đã chọn
                 var selectedValue = $(this).text();

                 // Cập nhật nút Filter với giá trị đã chọn
                 $('#filterButton').text(selectedValue);
             });

             // Lắng nghe sự kiện khi một mục trong danh sách Category được chọn
             $('.cate').click(function() {
                 // Lấy giá trị của mục đã chọn
                 var selectedValue = $(this).text();

                 // Cập nhật nút Category với giá trị đã chọn
                 $('#categoryButton').text(selectedValue);
             });
         });
     </script>
 @endsection
