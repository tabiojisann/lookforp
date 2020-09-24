

<?php
$link_limit = 7; 
?>

@if ($articles->lastPage() > 1)
    <ul class="pagination pt-1 d-flex justify-content-center bg-white">
        <li class="page-item {{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link text-muted" href="{{ $articles->url(1) }}"><<</a>
         </li>
         <li class="page-item {{ ($articles->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link text-muted" href="{{ $articles->url(1) }}">
                <span aria-hidden="true"><</span>
                <small> 前へ</small>
            </a>
        </li>
        @for ($i = 1; $i <= $articles->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $articles->currentPage() - $half_total_links;
            $to = $articles->currentPage() + $half_total_links;
            if ($articles->currentPage() < $half_total_links) {
               $to += $half_total_links - $articles->currentPage();
            }
            if ($articles->lastPage() - $articles->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($articles->lastPage() - $articles->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="page-item px-1 {{ ($articles->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link border border-primary " href=" {{ $articles->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="page-item {{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link text-muted" href="{{ $articles->url($articles->currentPage()+1) }}" >
                <span aria-hidden="true">></span>
                <small>次へ</small>
            </a>
        </li>
        <li class="page-item text-muted {{ ($articles->currentPage() == $articles->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link text-muted" href="{{ $articles->url($articles->lastPage()) }}">>></a>
        </li>
    </ul>
@endif


