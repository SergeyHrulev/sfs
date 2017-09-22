<div class="col m4 s12" style="padding: 0 5px 0 0;">
    <div class="card">
        <div class="card-image">
            <img src="{{ asset( 'storage/' . $article->photo) }}" alt="{{ $article->alt }}" title="{{ $article->title }}" style="max-height: 240px;">
            <div class="preview-article-card-date-wraper">
                <div class="preview-article-card-date">
                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('d') }}</span>
                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('M') }}</span>
                </div>
            </div>
        </div>
        <div class="card-content">
            <p style="font-size: 12px;">
                {{ str_limit($article->anons, 70) }}
            </p>
            <p><a href="{{ url('articles/' . $article->slug) }}" style="font-size24px;font-weight: bold;color: #A17D45;">читать ...</a></p>
        </div>
    </div>
</div>