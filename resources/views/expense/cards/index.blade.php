@extends('components.index')

@section('content')
<div class="container-fluid">
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('income.dashboard.index') }}">Expense</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('expense.card.index') }}">Card</a></li>
        </ol>
    </div>
    <!-- row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Card</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('expense.card.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Card </label>
                                    <select class="form-control default-select" name="card_id" id="card_id" tabindex="-98">
                                        @foreach ($cards as $card)
                                            <option value="{{ $card->id }}">{{ $card->name }}</option>
                                        @endforeach
                                    </select>

                                    @error('card_id')
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
                                    <input type="number" name="amount" id="amount" step="0.01" class="form-control" placeholder="Enter The Amount">
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
                                        <option value="1">Taka</option>
                                        <option value="2">Doller</option>
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
                                    <input type="date" name="date" id="date" class="form-control" placeholder="Enter The Date">
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
                                        <option value="2">3</option>
                                        <option value="3">4</option>
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
                                    <textarea class="form-control" name="description" id="description" rows="4" id="comment"></textarea>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Payments Queue</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th class="width80">#</th>
                                    <th>Code</th>
                                    <th>Card</th>
                                    <th>Expense By</th>
                                    <th>DATE</th>
                                    <th>STATUS</th>
                                    <th>Amount</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenseCards as $key=> $expenseCard)
                                    <tr>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('expense.card.edit', $expenseCard->id) }}">Edit</a>
                                                    <form action="{{ route('expense.card.destroy', $expenseCard->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" href="#">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td><strong>{{ $key+1 }}</strong></td>
                                        <td>{{ $expenseCard->code }}</td>
                                        <td>{{ $expenseCard->card_id }}</td>
                                        <td>{{ $expenseCard->expense_by_id }}</td>
                                        <td>{{ $expenseCard->date }}</td>
                                        <td><span class="badge light badge-success">Successful</span></td>
                                        <td>{{ $expenseCard->amount }}  {{ $expenseCard->currency == 1 ? 'Taka' : 'Doller' }}</td>
                                        <td>{{ $expenseCard->description }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('custome_script')
    <script>

    </script>
@endpush
@endsection
