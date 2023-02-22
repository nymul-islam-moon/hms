@extends('components.index')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('income.dashboard.index') }}">Income</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('income.cash.index') }}">Mobile Bank</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Mobile Bank</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('income.mobilebank.update', $incomeMobileBank->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Sender Name</label>
                                    <input type="text" name="cash_in_by_name" id="cash_in_by_name" class="form-control" value="{{ $incomeMobileBank->cash_in_by_name }}" placeholder="Enter The Sender Name">
                                    @error('cash_in_by_name')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Sender Phone</label>
                                    <input type="text" name="cash_in_by_phone" id="cash_in_by_phone" class="form-control" value="{{ $incomeMobileBank->cash_in_by_phone }}" placeholder="Enter The Sender Phone">
                                    @error('cash_in_by_phone')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Amount</label>
                                    <input type="number" name="amount" id="amount" step="0.01" class="form-control" value="{{ $incomeMobileBank->amount }}" placeholder="Enter The Amount">
                                    @error('amount')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Currency </label>
                                    <select class="form-control default-select" name="currency" id="currency" tabindex="-98">
                                        <option selected>-- Select One --</option>
                                        <option value="1" {{ $incomeMobileBank->currency == 1 ? 'SELECTED' : ''}}>Taka</option>
                                        <option value="2" {{ $incomeMobileBank->currency == 2 ? 'SELECTED' : ''}}>Doller</option>
                                    </select>

                                    @error('currency')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Mobile Bank </label>
                                    <select class="form-control default-select" name="mobile_bank_id" id="mobile_bank_id" tabindex="-98">
                                        @foreach ($mobileBanks as $mobileBank)
                                            <option value="{{ $mobileBank->id }}">{{ $mobileBank->name }}</option>
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

                                <div class="form-group col-md-6">
                                    <label>Date</label>
                                    <input type="date" name="date" id="date" class="form-control" value="{{ $incomeMobileBank->date }}" placeholder="Enter The Date">
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
                                    <label>Cashed in For</label>
                                    <select class="form-control default-select" name="cash_in_for" id="cash_in_for" tabindex="-98">
                                        <option selected>-- Select One --</option>
                                        <option value="1" {{ $incomeMobileBank->cash_in_for = 1 ? 'SELECTED' : '' }}>1</option>
                                        <option value="2" {{ $incomeMobileBank->cash_in_for = 2 ? 'SELECTED' : '' }}>2</option>
                                    </select>

                                    @error('cash_in_for')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Description </label>
                                    <textarea class="form-control" name="description" id="description" rows="4" id="comment">{{ $incomeMobileBank->description }}</textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
