@extends('app')
@section('content')
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3>Contextual classes</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                        <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                        <li class="list-group-item list-group-item-success">This is a success list group item</li>
                        <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                        <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                        <li class="list-group-item list-group-item-info">This is a info list group item</li>
                        <li class="list-group-item list-group-item-light">This is a light list group item</li>
                        <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="content col-lg-9">
                    <h4>Favourite classes</h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Class</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Heading</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-active">
                            <th scope="row">Active</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr>
                            <th scope="row">Default</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">Primary</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-secondary">
                            <th scope="row">Secondary</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-success">
                            <th scope="row">Success</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-danger">
                            <th scope="row">Danger</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-warning">
                            <th scope="row">Warning</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-info">
                            <th scope="row">Info</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-light">
                            <th scope="row">Light</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        <tr class="table-dark">
                            <th scope="row">Dark</th>
                            <td>Cell</td>
                            <td>Cell</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

