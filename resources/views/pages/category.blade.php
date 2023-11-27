@extends('layouts.admin')

@section('konten')

<div class="content-wrapper">

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1 class="m-0">Categories</h1>

                </div>

            </div>

        </div>

    </div>

    <section class="content">

        <div class="container-fluid">

            <table class="table table-primary">

                <thead>

                    <tr>

                        <th scope="col">Nama</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($categories as $item)

                    <tr>

                        <td>{{ $item->name }}</td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

            <!-- Isi konten kategori disini -->

        </div>

    </section>

</div>

@endsection
