<div class="col m4 s12" style="padding: 0 5px 0 0;">
    <div class="card">
        <div class="card-image">
            <img src="{{ asset('storage/' . $event->photo) }}" alt="{{ $event->title }}">
            <div class="preview-article-card-date-wraper">
                <div class="preview-article-card-date">
                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->created_at)->format('d') }}</span>
                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->created_at)->format('M') }}</span>
                </div>
            </div>
        </div>
        <div class="card-content">
            <p style="font-size: 12px;">
                {{ $event->anons }}
            </p>
            <p><a href="{{ url('events/' . $event->slug) }}" style="font-size24px;font-weight: bold;color: #A17D45;">читать ...</a></p>
        </div>
    </div>
</div>