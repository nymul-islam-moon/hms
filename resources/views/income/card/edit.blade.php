@extends('components.index')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Horizontal Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('income.card.update', $incomeCard->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Card Number</label>
                                    <input type="text" name="card_number" class="form-control" value="{{ $incomeCard->card_number }}" placeholder="Enter The Card Number">
                                    @error('card_number')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Bank Name</label>
                                    <input type="text" name="bank_name" id="bank_name" class="form-control" value="{{ $incomeCard->bank_name }}" placeholder="Enter The Bank Name">
                                    @error('bank_name')
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
                                    <input type="number" name="amount" id="amount" step="0.01" class="form-control" value="{{ $incomeCard->amount }}" placeholder="Enter The Amount">
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
                                        <option value="1" {{ $incomeCard->currency == 1 ? 'SELECTED':''}}>1</option>
                                        <option value="2" {{ $incomeCard->currency == 2 ? 'SELECTED':''}}>3</option>
                                        <option value="3" {{ $incomeCard->currency == 3 ? 'SELECTED':''}}>4</option>
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
                                    <input type="date" name="date" id="date" class="form-control" value="{{ $incomeCard->date }}" placeholder="Enter The Date">
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
                                    <label>Credit For</label>
                                    <select class="form-control default-select" name="credit_for" id="credit_for" tabindex="-98">
                                        <option selected>-- Select One --</option>
                                        <option value="1" {{ $incomeCard->credit_for == 1 ? 'selected' : ''}}>1</option>
                                        <option value="2" {{ $incomeCard->credit_for == 2 ? 'selected' : ''}}>3</option>
                                        <option value="3" {{ $incomeCard->credit_for == 3 ? 'selected' : ''}}>4</option>
                                    </select>

                                    @error('credit_for')
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                            <strong>Error!</strong> {{ $message }}
                                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Credit By </label>
                                    <select class="form-control default-select" name="credit_by" id="credit_by" tabindex="-98">
                                        <option selected>-- Select One --</option>
                                        <option value="1" {{ $incomeCard->credit_by == 1 ? 'SELECTED' : '' }}>1</option>
                                        <option value="2" {{ $incomeCard->credit_by == 2 ? 'SELECTED' : '' }}>3</option>
                                        <option value="3" {{ $incomeCard->credit_by == 3 ? 'SELECTED' : '' }}>4</option>
                                    </select>

                                    @error('credit_by')
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
                                    <textarea class="form-control" name="description" id="description" rows="4" id="comment">{{ $incomeCard->description }}</textarea>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
