<div class="ui card">
    <div class="image dimmable">
        <div class="ui dimmer">
            <div class="content">
                <div class="center">
                    <?php if(\app\helper\auth::isAuth()): ?>
                        <a class="ui inverted button" href="<?= \app\helper\Link::url('PanierController@add', ['id' => $article->id])?>"><i class="shop icon"></i> Ajouter au panier</a>
                    <?php else: ?>
                        <a class="ui inverted button" href="<?= \app\helper\Link::url('UserController@login')?>">Connectez-vous</a>
                        <a class="ui inverted button" href="<?= \app\helper\Link::url('UserController@register')?>">Inscrivez-vous</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <img src="<?= \app\Helper\Html::getImgForArticle($article->id) ?>" alt="" />
    </div>
    <div class="content">
        <a href="<?= \app\helper\Link::url('ArticlesController@detail', ['id' => $article->id])?>" class="header"><?= e($article->nom) ?></a>
        <div class="meta">
            <a class="group" href="<?= \app\helper\Link::url('ArticlesController@detail', ['id' => $article->id])?>"><?= e($article->description) ?></a>
        </div>
    </div>
    <div class="extra content">
        <div class="time"><?= e($article->created_at->diffForHumans()) ?></div>
        <div class="price">
            <?= e($article->prix) ?><i class="euro icon"></i>
        </div>
        <div class="type">
            type: <a href="<?= \app\helper\Link::url('ArticlesController@recherches', ['nom' => $article->type->name])?>"><?= $article->type->name ?></a>
        </div>
    </div>
</div>