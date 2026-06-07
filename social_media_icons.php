<ul id="floating-share-buttons">
    <li><a href="https://www.facebook.com/srmnoida/" class="share-facebook" target="_blank"><i class="fab fa-facebook fa-2x" aria-hidden="true"></i></a></li>
    <li><a href="https://www.instagram.com/srmnoida" class="share-pinterest" target="_blank"><i class="fab fa-instagram fa-2x" target="_blank" aria-hidden="true"></i></a></li>
</ul>
<style>

    #floating-share-buttons {
        list-style-type: none;
        margin: 0;
        padding: 0;
        font-size: 0;
    }

    #floating-share-buttons a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    #floating-share-buttons a.share-facebook {
        background-color: #395793;
    }

    #floating-share-buttons a.share-pinterest {
        /* background: #f14963; */
        background: linear-gradient(135deg,#582bcd 0,#ed4c33 50%,#f7d36f 100%);
    }

    #floating-share-buttons a.share-whatsapp {
        background-color: #48a91f;
    }

    #floating-share-buttons a.share-mail {
        background-color: #333;
    }

    /* Desktop */
    @media (min-width: 1023px) {
        ul#floating-share-buttons {
            position: fixed;
            top: 65%;
            transform: translateY(-50%);
            min-height: 100px;
            z-index: 999;
            padding: 0px;
            /* display:none; */
        }

        ul#floating-share-buttons a {
            width: 40px;
            height: 40px;
            align-items: center;
            display: inline-flex;
            justify-content: center;
            transition: width 0.5s;
        }

        ul#floating-share-buttons a:hover {
            width: 4.5rem;
        }

        #floating-share-buttons a.share-whatsapp {
            /* display: none; */
        }
    }

@media (max-width:992px) {
    .floating-share-buttons, .share-pinterest, .share-facebook, .share-whatsapp{
        display:none;
    }
}
</style>