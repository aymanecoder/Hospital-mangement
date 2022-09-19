<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hospital Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
          <div class="container-fluid page-body-wrapper d-flex flex-column">
                @if($message = session('message'))
                  <div class="alert alert-success mt-5" role="alert">
                      {{$message}}
                  </div>
                 @endif
              <div class="container">
                  <form action="{{route('addDoctor')}}" enctype="multipart/form-data" method="POST">
                      @csrf
                      <div class="mt-3 flex justify-content-center">
                          <input type="text" id="text" name="name" class="bg-gray-50 mt-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name Doctor" required>
                      </div>
                      <div class="mt-3 flex justify-content-center">
                          <input type="text" name="phone" id="phone" class="bg-gray-50 mt-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Number phone" required>
                      </div>
                      <div class="mt-5 flex justify-content-center ">

                      <select id="countries" name="speciality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          <option selected>Speciality</option>
                          <option>skin</option>
                          <option>heart</option>
                          <option>eye</option>
                          <option>nose</option>
                      </select>
                      </div>
                      <div class="mt-3 flex justify-content-center">
                          <input type="text" id="room" name="room" class="bg-gray-50 mt-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Room number" required>

                      </div>
                      <div class="mt-5 flex justify-content-center">
                          <input class="block w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file" name="photo">
                      </div>
                      <button type="submit" class="focus:outline-none mt-5 flex justify-content-center text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Save</button>
                  </form>



              </div>
          </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
<!-- End custom js for this page -->
</body>
</html>
