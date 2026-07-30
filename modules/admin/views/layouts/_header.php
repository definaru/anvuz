
<?php
    use frontend\components\icons\Icons;
    use frontend\components\blocks\ui\Profile;
?>
<header class="position-fixed w-100" style="z-index: 30">
    <div class="d-flex align-items-center justify-content-between px-3 py-2 border-bottom">
        <div class="d-flex align-items-center gap-2">
            <div class="toggle-btn" onclick="toggleAside()">
                <?=Icons::Menu(20, 'currentColor', 3);?>
            </div>
            <div class="input-group border rounded-3">
                <div class="input-group-text border-0">
                    <?=Icons::Search(20);?>
                </div>
                <input 
                    id="search"
                    type="search" 
                    name="search" 
                    class="form-control border-0 bg-body-tertiary ps-0" 
                    placeholder="Найти..." 
                    aria-label="Найти"
                />
            </div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
                <button class="d-flex align-items-center btn btn-primary gap-2 px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?=Icons::Plus();?>
                    Добавить
                </button>
                <ul class="dropdown-menu p-2 border-0 shadow">
                    <li>
                        <a class="dropdown-item" href="/admin/profiles/create">Пользователя</a>
                        <a class="dropdown-item" href="/admin/documents/create">Документы</a>
                        <a class="dropdown-item" href="#">Событие</a>
                        <a class="dropdown-item" href="#">Университет</a>
                        <a class="dropdown-item" href="/admin/pages/create">Страницу</a>
                        <a class="dropdown-item" href="/admin/news/create">Новость</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="dropdown">
                <button class="btn btn-light rounded-circle px-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <? //=Icons::Grip();?>
                </button>
            </div> -->
            <?=Profile::dropdown();?>
        </div>
    </div>
</header>