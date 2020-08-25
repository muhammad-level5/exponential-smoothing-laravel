@extends('layout.forecast')

@section('title', 'Forecast')
    
@section('content')
<div class="container-fluid">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <!-- Content Row -->
    <div class="row">

      <div class="col-xl-8 col-lg-7">

        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Prediction with Exponential Smoothing Holt</h6>
              </div>
          <div class="card-body">
              <form action="{{ route('result') }}" method="POST" class="form-group">
                  @csrf
                  <div class="form-group">
                    <label for="alpha" class="sr_only">Konstanta α</label>
                    <select name="alpha" id="alpha" class="form-control mb-2">
                        <option selected disabled>Konstanta α</option>
                        <option value="0.1">0.1</option>
                        <option value="0.2">0.2</option>
                        <option value="0.3">0.3</option>
                        <option value="0.4">0.4</option>
                        <option value="0.5">0.5</option>
                        <option value="0.6">0.6</option>
                        <option value="0.7">0.7</option>
                        <option value="0.8">0.8</option>
                        <option value="0.9">0.9</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="beta" class="sr_only">Konstanta β</label>
                    <select name="beta" id="beta" class="form-control mb-2">
                        <option selected disabled>Konstanta β</option>
                        <option value="0.1">0.1</option>
                        <option value="0.2">0.2</option>
                        <option value="0.3">0.3</option>
                        <option value="0.4">0.4</option>
                        <option value="0.5">0.5</option>
                        <option value="0.6">0.6</option>
                        <option value="0.7">0.7</option>
                        <option value="0.8">0.8</option>
                        <option value="0.9">0.9</option>
                    </select>
                  </div>

                  <button class="btn btn-primary btn-block mt-4">Prediction</button>
              </form>
          </div>
        </div>

      </div>

      <!-- Donut Chart -->
      <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Result of Prediction</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
              <table style="width: 100%;">
                  <tr>
                      <th style="width:50%;">Prediction</th>
                      <td class="text-right" style="width:50%;">{{ round($ramal, 4) }}</td>
                  </tr>
                  <tr>
                    <th style="width:50%;">MAPE</th>
                    <td class="text-right" style="width:50%;">{{ round($akurasi,4) }}%</td>
                  </tr>
                  <tr>
                    <th style="width:50%;">Akurasi</th>
                    <td class="text-right" style="width:50%;">{{ round($persen ,4) }}%</td>
                  </tr>
              </table>
        </div>
      </div>
    </div>

  </div>
@endsection