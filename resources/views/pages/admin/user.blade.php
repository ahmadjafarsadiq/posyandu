<!-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Posyandu</title>

    @include('includes.admin.style')

</head> -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('transaction')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">
                <table class="table-auto w-full text-center">
                    <thead>
                        <tr>

                            <th class="border px-6 py-4">ID</th>
                            <th class="border px-6 py-4">Nama</th>
                            <th class="border px-6 py-4">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($Users->count())
                        @foreach($Users as $item)

                        <tr>
                            <td class="border px-6 py-4">{{$item->id}}</td>
                            <td class="border px-6 py-4">{{$item->name}}</td>
                            <td class="border px-6 py-4">{{$item->email}}</td>
                            <!-- <a href="{{route('users.edit', $item->id)}}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 mx-2 rounded">
                Edit
            </a> -->
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="2">No record found</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="text-center mt-5">
            {{$users->links()}}
        </div> -->
        </div>
    </div>
</x-app-layout>