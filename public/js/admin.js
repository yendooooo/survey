//--- 메뉴 클릭 이벤트
document.querySelector('.nav-list').addEventListener('click', menuActive);

//--- 메뉴 활성화시킵니다.
function menuActive(e) {

    //--- 이벤트 대상체
    let menu = e.target;
    let target = undefined;     // 클릭한 대상체를 감싸고 있는 li 태그
    let arrowMenu = undefined;  // 화살표 태그
    let secondMenu = undefined; // 2차메뉴
    let secondBool = true;     // TRUE:1차메뉴. FALSE:2차메뉴

    //--- 대상체가 사이트관리이면 클릭이 필요없으므로 빠꾸
    if (menu.classList.contains('nav-info') || menu.parentNode.classList.contains('nav-info'))
        return;

    //--- 클릭한 메뉴의 대상체의 active 효과를 주기위해 LI 태그를 저장시킨다.
    switch (menu.nodeName) {
        case "LI":
            target = menu;
            arrowMenu = menu.children[2];
            secondMenu = menu.nextSibling.nextSibling;
            secondBool = target.parentNode.nodeName !== "OL";
            break;

        case "I":
        case "SPAN":
            target = menu.parentNode;
            arrowMenu = menu.parentNode.children[2];
            secondMenu = menu.nextSibling.nextSibling;
            secondBool = target.nodeName !== "OL";
            break;
    }


    //--- 1차메뉴 클릭시 실행
    if (secondBool) {

        //--- 클릭이 일어났으므로 선으로 모든 메뉴를 비활성화 시킨다. (ul 태그(.nav-list)의 li 태그들을 파라미터로 넘김)
        menuDisabled(this.children);

        target.classList.toggle('active'); // active 효과 주기
        arrowChange(target, arrowMenu);          // 클릭으로인한 arrow 방향 변환
        if (secondMenu) secondMenu.classList.toggle('on'); // 2차 메뉴를 펼침

        return false;
    }


    /**
     * active 일때 화살표모양 변경 함수
     * @param target : LI tag (메뉴리스들)
     * @param arrow  : I tag (up, down 아이콘)
     */
    function arrowChange(target, arrow) {

        if (target.classList.contains('active')) {
            arrow.classList.remove('fa-caret-up');
            arrow.classList.add('fa-caret-down');

            return false;
        }

        arrow.classList.remove('fa-caret-down');
        arrow.classList.add('fa-caret-up');
    }

    /**
     * 메뉴 클릭시 활성화 되어있는 메뉴를 비활성화 시키고, 화살표방향을 위로 다올립니다.
     * @param menus : menu ul tag (.nav-list)
     */
    function menuDisabled(menus) {

        for (let menu of menus) {

            //--- 최상단 메인명은 제외 합니다. ex) 사이트관리
            if (menu.classList.contains('nav-info'))
                continue;

            //--- 모든 active 메뉴 비활성화
            menu.classList.remove('active');

            //---
            if (menu.nodeName === 'OL')
                continue;

            //--- 모든 화살표 방향을 위로 향하게 바꿉니다.
            menu.children[2].classList.remove('fa-caret-down');
            menu.children[2].classList.add('fa-caret-up');
        }
    }
}
