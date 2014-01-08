    <div class="user">
{if $GLOBAL.userdata.username|default}
            <p>欢迎(Welcome) {$smarty.session.USERDATA.username|escape}</p>
{else}
            <p>欢迎 游客(Welcome)</p>
{/if}
    </div>
