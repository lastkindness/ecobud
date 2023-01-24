<?php
/*
 * Template name: Front Test Template
 */

get_header('front'); ?>

<section class="section">
    <div class="container">
        <div class="section__wrapper">
            <ul>
                <li><div class="icon"></div></li>
            </ul>
            <p><mark>Lorem ipsum dolor sit</mark> amet, consectetur adipisicing elit. Ab alias aliquid beatae consectetur doloribus eaque, enim fugiat in laboriosam libero magni mollitia natus neque non numquam qui rerum ullam voluptate?</p>
            <blockquote cite="https://www.huxley.net/bnw/four.html">
                <p>Words can be like X-rays, if you use them properly—they’ll go through anything. You read and you’re pierced.</p>
            </blockquote>
            <figcaption>—Aldous Huxley, <cite>Brave New World</cite></figcaption>
            <h1>Some title</h1>
            <h2>Some title</h2>
            <h3>Some title</h3>
            <h4>Some title</h4>
            <h5>Some title</h5>
            <h6>Some title</h6>
            <a href="#">LINK</a>
            <a class="btn" href="#">LINK</a>
            <a disabled class="btn" href="#">LINK</a>
            <a class="btn btn_lite" href="#">LINK</a>
            <a disabled class="btn btn_lite" href="#">LINK</a>
            <button class="btn btn_lite">LINK</button>
            <button disabled class="btn btn_lite">LINK</button>
            <button class="btn">LINK</button>
            <button disabled class="btn">LINK</button>
            <input type="button" value="LINK" class="btn">
            <input disabled type="button" value="LINK" class="btn">
            <input type="button" value="LINK" class="btn btn_lite">
            <input disabled type="button" value="LINK" class="btn btn_lite">
        </div>
    </div>
</section>

<?php get_footer('front'); ?>
