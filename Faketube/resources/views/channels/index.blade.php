<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faketube - Quản lý kênh yêu thích</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2><i class="fas fa-play-circle"></i>Faketube - Quản lý kênh yêu thích</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('channels.create') }}"> Thêm mới kênh</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Tên kênh</th>
                    <th>Mô tả</th>
                    <th>Số lượng người theo dõi</th>
                    <th>URL</th>
                    <th width="280px">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($channels as $channel)
                    <tr>
                        <td>{{ $channel->id }}</td>
                        <td>{{ $channel->ChannelName }}</td>
                        <td>{{ $channel->Description }}</td>
                        <td>{{ $channel->SubscribersCount }}</td>
                        <td>{{ $channel->URL }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('channels.show', $channel->id) }}">Xem</a>
                            <a class="btn btn-primary" href="{{ route('channels.edit', $channel->id) }}">Sửa</a>
                            <button type="button" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#confirmDeleteModal{{ $channel->id }}">Xóa</button>
                        </td>
                    </tr>
                    <!-- Modal xác nhận xóa -->
                <div class="modal fade" id="confirmDeleteModal{{ $channel->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                               <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <div class="modal-body">
                           Bạn có muốn xóa kênh "{{ $channel->ChannelName }}" không?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <form class="delete-form" action="{{ route('channels.destroy', $channel->id) }}" method="POST">
                               @csrf
                               @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- Các tệp JavaScript cần cho Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
