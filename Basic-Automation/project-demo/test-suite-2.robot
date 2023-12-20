*** Settings ***
Library           SeleniumLibrary

*** Variables ***
${BROWSER}        chrome
${BASE_URL}       http://localhost:8000  # Adjust with your web app URL

*** Test Cases ***

Test Case 1: Verify Cover Page Elements
    Open Browser  ${BASE_URL}/  ${BROWSER}
    Maximize Browser Window

    Page Should Contain Element  xpath://h1[contains(text(), 'SPK Pemilihan Laptop Terbaik')]
    Page Should Contain Element  xpath://a[@href='${BASE_URL}/login']
    Page Should Contain Element  xpath://a[@href='${BASE_URL}/register']

Test Case 2: Testing Login and Verify Dashboard
    Open Browser  ${BASE_URL}/  ${BROWSER}
    Maximize Browser Window
    Click Element  xpath://a[contains(text(), 'Login')]

    Input Text    id:username  testlogin
    Input Text    id:password  00000000
    Click Button  xpath://button[contains(text(), 'Login')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Dashboard')]
    Page Should Contain Element  xpath://p[contains(text(), 'Sistem pendukung keputusan pemilihan laptop')]

Test Case 3: Verify Logout Functionality From Cover
    Open Browser  ${BASE_URL}/  ${BROWSER}
    Maximize Browser Window
    Click Element  xpath://a[contains(text(), 'Login')]

    Input Text    id:username  testlogin
    Input Text    id:password  00000000
    Click Button  xpath://button[contains(text(), 'Login')]

    Click Link  xpath://a[contains(text(), 'SPK WP')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Hi! ')]

    Click Element  xpath://button[contains(text(), 'Logout')]
    Page Should Contain Element  xpath://h3[contains(text(), 'Login')]
    Page Should Contain Element  xpath://button[contains(text(), 'Login')]

Test Case 4: Verify Logout Functionality From Navbar
    Open Browser  ${BASE_URL}/  ${BROWSER}
    Maximize Browser Window
    Click Element  xpath://a[contains(text(), 'Login')]

    Input Text    id:username  testlogin
    Input Text    id:password  00000000
    Click Button  xpath://button[contains(text(), 'Login')]

    Page Should Contain Element  xpath://h1[contains(text(), 'Dashboard')]
    Page Should Contain Element  xpath://p[contains(text(), 'Sistem pendukung keputusan pemilihan laptop')]
    Click Link  xpath://a[@class='nav-link dropdown-toggle']
    Click Element  xpath://button[contains(text(), 'Logout')]

    Page Should Contain Element  xpath://h3[contains(text(), 'Login')]
    Page Should Contain Element  xpath://button[contains(text(), 'Login')]

Test Case 5: Verify Register Functionality
    Open Browser  ${BASE_URL}  ${BROWSER}
    Maximize Browser Window

    Click Element  xpath://a[contains(text(), 'Daftar')]

    Page Should Contain Element  xpath://h3[contains(text(), 'Registration Form')]
    Page Should Contain Element  xpath://button[contains(text(), 'Register')]

    # Fill and Submit Register Form
    Input Text    name=name                   testlogin1
    Input Text    name=username               testlogin1
    Input Text    name=password               11111111
    Input Text    name=password_confirmation  11111111
    Click Button  xpath://button[contains(text(), 'Register')]

Test Case 6 : Verify Sidebar Functionality Link
    Open Browser  ${BASE_URL}/  ${BROWSER}
    Maximize Browser Window
    Click Element  xpath://a[contains(text(), 'Login')]

    Input Text    id:username  testlogin
    Input Text    id:password  00000000
    Click Button  xpath://button[contains(text(), 'Login')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Dashboard')]
    Page Should Contain Element  xpath://p[contains(text(), 'Sistem pendukung keputusan pemilihan laptop')]

    Click Link  xpath://a[contains(@href, 'dashboard')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Dashboard')]
    Click Link  xpath://a[contains(@href, 'data-kriteria')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Kriteria')]
    Click Link  xpath://a[contains(@href, 'data-sub-kriteria')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Sub Kriteria')]
    Click Link  xpath://a[contains(@href, 'data-alternatif')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Alternatif')]
    Click Link  xpath://a[contains(@href, 'data-penilaian')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Penilaian')]
    Click Link  xpath://a[contains(@href, 'data-perhitungan')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Perhitungan')]
    Click Link  xpath://a[contains(@href, 'data-hasil-akhir')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Hasil Akhir')]
    Click Link  xpath://a[contains(@href, 'data-user')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data User')]

Test Case 7 : Verify Calculations Functionality
    Open Browser  ${BASE_URL}/  ${BROWSER}
    Maximize Browser Window
    Click Element  xpath://a[contains(text(), 'Login')]

    Input Text    id:username  testlogin
    Input Text    id:password  00000000
    Click Button  xpath://button[contains(text(), 'Login')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Dashboard')]
    Page Should Contain Element  xpath://p[contains(text(), 'Sistem pendukung keputusan pemilihan laptop')]

    Click Link  xpath://a[contains(@href, 'data-perhitungan')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Perhitungan')]
    Click Element  xpath://a[contains(text(), ' Hitung')]

Test Case 8 : Verify Print The Final Result Functionality
    Open Browser  ${BASE_URL}/  ${BROWSER}
    Maximize Browser Window
    Click Element  xpath://a[contains(text(), 'Login')]

    Input Text    id:username  testlogin
    Input Text    id:password  00000000
    Click Button  xpath://button[contains(text(), 'Login')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Dashboard')]
    Page Should Contain Element  xpath://p[contains(text(), 'Sistem pendukung keputusan pemilihan laptop')]

    Click Link  xpath://a[contains(@href, 'data-hasil-akhir')]
    Page Should Contain Element  xpath://h1[contains(text(), 'Data Hasil Akhir')]
    Click Element  xpath://a[contains(text(), ' Cetak Data')]

*** Keywords ***
Wait Until Element Is Visible
    [Arguments]  ${locator}  ${timeout}=15s
    Wait Until Element Is Visible  ${locator}  timeout=${timeout}
    Wait Until Button Is Visible  ${locator}  timeout=${timeout}
    Wait Until Link Is Visible  ${locator}  timeout=${timeout}
    
Wait Until Page Contains Element
    [Arguments]  ${locator}  ${timeout}=15s
    Wait Until Page Contains Element  ${locator}  timeout=${timeout}
    Wait Until Page Contains Button  ${locator}  timeout=${timeout}
    Wait Until Page Contains Link  ${locator}  timeout=${timeout}
