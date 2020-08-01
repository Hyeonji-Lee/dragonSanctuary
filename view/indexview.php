<?php
class IndexView extends View{
    public function index(){
        $mysidia = Registry::get("mysidia");
        $document = $this->document;
        $document->setTitle("&nbsp;&nbsp;<img src='/picuploads/png/ds_logo.png' />");
        $document->add(new Comment());
        $document->add(new Comment("
            <span>
                <img src='/picuploads/png/ds_main2.png' />
                <img src='/picuploads/png/ds_main.png' />
            </span>
            <h3> 드래곤 보호 구역에 오신 것을 환영합니다! </h3>
            이 곳에서는 다양한 드래곤들을 모으고 키울 수 있습니다.<br><br>
            <table style='text-align:center;'>
                <tr>
                    <td><form id='linkform' action='/register' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='register'>
                        <button id='register' class='btn-text btn-sm' value='link' name='register' type='submit' style='width:140;height:60;'><strong>회원가입하기</strong></button>
                        </form>
                    </td>
                    <td><form id='linkform' action='http://dragonsanctuary.modoo.at/?link=ykrlczx9' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='guide'>
                        <button id='guide' class='btn-text btn-sm' value='link' name='guide' type='submit' style='width:140;height:60;'><strong>게임소개&가이드</strong></button>
                        </form>
                    </td>
                </tr>
            </table>
            <h3> 새로운 소식 </h3>
            <div class='well'>
                개발중인 게임이므로 관리자의 승인이 필요합니다.<br>
                다양한 드래곤과 아이템을 구상 및 추가중입니다.
            </div>
            <h4> 드래곤 보호구역에서 할 수 있는 다양한 활동 </h4>
            <table style='text-align:center;'>
                <tr>
                    <td><form id='linkform' action='/adopt' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='adopt'>
                        <button id='adopt' class='btn-text btn-sm' value='link' name='adopt' type='submit' style='width:100;height:100;'><img src='/picuploads/png/button_adopt.png' /></button>
                        </form>
                    </td>
                    <td><form id='linkform' action='/pound' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='pound'>
                        <button id='pound' class='btn-text btn-sm' value='link' name='pound' type='submit' style='width:100;height:100;'><img src='/picuploads/png/button_pound.png' /></button>
                        </form>
                    </td>
                    <td><form id='linkform' action='/explore' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='explore'>
                        <button id='explore' class='btn-text btn-sm' value='link' name='explore' type='submit' style='width:100;height:100;'><img src='/picuploads/png/button_explore.png' /></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><form id='linkform' action='/myadopts' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='myadopts'>
                        <button id='myadopts' class='btn-text btn-sm' value='link' name='myadopts' type='submit' style='width:100;height:100;'><img src='/picuploads/png/button_myadopts.png' /></button>
                        </form>
                    </td>
                    <td><form id='linkform' action='/levelup/daycare' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='daycare'>
                        <button id='daycare' class='btn-text btn-sm' value='link' name='daycare' type='submit' style='width:100;height:100;'><img src='/picuploads/png/button_daycare.png' /></button>
                        </form>
                    </td>
                    <td><form id='linkform' action='/shop' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='shop'>
                        <button id='shop' class='btn-text btn-sm' value='link' name='shop' type='submit' style='width:100;height:100;'><img src='/picuploads/png/button_shop.png' /></button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td><form id='linkform' action='http://dragonsanctuary.modoo.at' name='linkform' method='post' role='form'>
                        <input id='link' name='link' type='hidden' value='official'>
                        <button id='official' class='btn-text btn-sm' value='link' name='official' type='submit' style='width:100;height:100;'><img src='/picuploads/png/button_official.png' /></button>
                        </form>
                    </td>
                </tr>
            </table>
            <div class='well'>
                이 게임은 크롬 브라우저에 최적화 되어있습니다.<br>
                익스플로러에서는 정상적으로 동작하지 않을 수 있으니 크롬을 사용하는것을 권장합니다.<br><br>
                <a href='https://www.google.co.kr/chrome/browser/desktop/'>▶구글 Chrome 다운로드<a>
            </div>
        <!-- END -->", FALSE));
    }
}
?>