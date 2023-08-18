<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faketube - Chi tiết kênh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2><i class="fas fa-play-circle"></i> Faketube - Chi tiết kênh</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-primary" href="{{ route('channels.index') }}"> Trở lại danh sách</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Tên kênh:</th>
                            <td>{{ $channel->ChannelName }}</td>
                        </tr>
                        <tr>
                            <th>Mô tả:</th>
                            <td>{{ $channel->Description }}</td>
                        </tr>
                        <tr>
                            <th>Số lượng người theo dõi:</th>
                            <td>{{ $channel->SubscribersCount }}</td>
                        </tr>
                        <tr>
                            <th>URL:</th>
                            <td><a href="{{ $channel->URL }}" target="_blank">{{ $channel->URL }}</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
