@extends('components.index')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Expense</a></li>
            <li class="breadcrumb-item active"><a href="">Mobile Bank</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Mobile Bank Edit</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">

                    <form action="{{ route('expense.mobilebank.update', $expenseMobileBank->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label>Mobile Bank </label>
                                <select class="form-control default-select" name="mobile_bank_id" id="mobile_bank_id" tabindex="-98">
                                    @foreach ($mobileBanks as $mobilebank)
                                        <option value="{{ $mobilebank->id }}" {{ $expenseMobileBank->mobile_bank_id == $mobilebank->id }}>{{ $mobilebank->name }}</option>
                                    @endforeach
                                </select>

                                @error('mobile_bank_id')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        <strong>Error!</strong> {{ $message }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group col-md-3">
                                <label>Amount</label>
                                <input type="number" name="amount" id="amount" step="0.01" class="form-control" value="{{ $expenseMobileBank->amount }}" placeholder="Enter The Amount">
                                @error('amount')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        <strong>Error!</strong> {{ $message }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-3">
                                <label>Currency </label>
                                <select class="form-control default-select" name="currency_id" id="currency_id" tabindex="-98">
                                    <option selected>-- Select One --</option>
                                    <option value="1" {{ $expenseMobileBank->currency_id == 1 ? 'SELECTED' : '' }}>Taka</option>
                                    <option value="2" {{ $expenseMobileBank->currency_id == 2 ? 'SELECTED' : '' }}>Doller</option>
                                </select>

                                @error('currency_id')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        <strong>Error!</strong> {{ $message }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>Date</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ $expenseMobileBank->date }}" placeholder="Enter The Date">
                                @error('date')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        <strong>Error!</strong> {{ $message }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label>Expense By</label>
                                <select class="form-control default-select" name="expense_by_id" id="expense_by_id" tabindex="-98">
                                    <option selected>-- Select One --</option>
                                    <option value="1">1</option>
                                </select>

                                @error('expense_by_id')
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        <strong>Error!</strong> {{ $message }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label>Description </label>
                                <textarea class="form-control" name="description" id="description" rows="4" id="comment">{{ $expenseMobileBank->description }}</textarea>
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
