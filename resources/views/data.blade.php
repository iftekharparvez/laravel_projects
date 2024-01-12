

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')


    
            <header class="bg-white shadow" style="display: block;">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Admin Panel') }}
                        </h2>
                        <a href="/data" class="underline">Yajra Data</a>
                        
                        <a href="/add" style="display: block;text-align:right;" class="underline">Add Employee</a>
                    </x-slot>
                </div>
            </header>
    
        <div class="py-12">
            <!-- Page Content -->
            <main>
                <div class="container">
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-bordered user_datatable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th width="100px">Action</th>

                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    


</body>
    <script type="text/javascript">

        $(function () {
          var table = $('.user_datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('data.index') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'name', name: 'name'},
                  {data: 'father_name', name: 'father_name'},
                  
                  {data: 'action', name: 'action', orderable: false, searchable: false, width: '100px',
                    render: function (data, type, full, meta) {
                        return '<button class="btn btn-danger btn-sm" onclick="deleteData(' + full.id + ')">Delete</button>';
                    }
                },                      
              ]
          });

      
      
        });
      </script>


</html>
