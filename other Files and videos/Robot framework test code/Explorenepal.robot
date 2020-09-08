*** Settings ***
Library  SeleniumLibrary

*** Variables ***
${url}  http://localhost/Explore_Nepal/
${browser}  Firefox
${file_path}  C:\Users\puja\Pictures\New folder\tucson.PNG



*** Test Cases ***

For ExploreNepal
    [Documentation]  This For Client
    [Tags]
    [Setup]  Test Setup
    title should be  Explore Nepal
    Click Image  xpath://html/body/section[2]/div/ul/li[3]/a/img
    Input text  xpath://html/body/section[2]/div/ul/h1/form/table/tbody/tr[1]/td[2]/input  Puja
    Input text  xpath://html/body/section[2]/div/ul/h1/form/table/tbody/tr[2]/td[2]/input  9813822092
    Input text  xpath://html/body/section[2]/div/ul/h1/form/table/tbody/tr[3]/td[2]/input  pnirlax@gmail.com
    Input text  xpath://html/body/section[2]/div/ul/h1/form/table/tbody/tr[4]/td[2]/input  180210
    Select From list by index  xpath://html/body/section[2]/div/ul/h1/form/table/tbody/tr[5]/td[2]/select  2
    Input text  xpath://html/body/section[2]/div/ul/h1/form/table/tbody/tr[6]/td[2]/input  Sinamangal
    Click Button  xpath://html/body/section[2]/div/ul/h1/form/table/tbody/tr[7]/td/input
    handle alert  accept
    sleep  3s
    Input Text  xpath://html/body/section[3]/div/ul/form/table/tbody/tr[1]/td[2]/input  pnirlax@gmail.com
    Input Text  xpath://html/body/section[3]/div/ul/form/table/tbody/tr[2]/td[2]/input  180210
    Click Button  xpath://html/body/section[3]/div/ul/form/table/tbody/tr[3]/td/input
    handle alert  accept
    sleep  3s
    title should be  Explore Nepal
    [TearDown]  Test teardown

Admin login Page
        [Documentation]  This For Admin
        [Tags]  Admin Login
        [Setup]  Test Setup
        Click Link  xpath://html/body/section[1]/header/div/nav/a[2]
        Input Text  xpath://*[@id="fom"]/form/table/tbody/tr[1]/td[2]/input  admin
        Input Text  xpath://*[@id="fom"]/form/table/tbody/tr[2]/td[2]/input  admin
        Click Button  xpath://*[@id="fom"]/form/table/tbody/tr[3]/td/input
        handle alert  accept

        sleep   5s
        title should be  Admin Home
        # Admins Dashboard
       # Click Link  xpath://*[@id="navigation"]/ul/li[1]/a/span
        #for not deleting message
        Click Link  xpath://*[@id="content"]/div/div[2]/table/tbody/tr[5]/td[5]/a[1]
        handle alert  dismiss
        # for deleting message
        #Click Link  xpath://*[@id="content"]/div/div[2]/table/tbody/tr[5]/td[5]/a[1]
        #Handle alert  accept

        #This is for vehicle adding
        Click Link  xpath://*[@id="navigation"]/ul/li[1]/a
        Click Link  xpath://*[@id="sidebar"]/div/div[2]/a
        Input Text  xpath://*[@id="content"]/div/form/div[1]/p[1]/input  robot test
        Input Text  xpath://*[@id="content"]/div/form/div[1]/p[2]/input  robot test
        Input Text  xpath://*[@id="content"]/div/form/div[1]/p[3]/input  robot test
        Choose File  xpath://*[@id="content"]/div/form/div[1]/p[4]/input  ${file_path}
        #Choose File  ${file_path}
        Input Text  xpath://*[@id="content"]/div/form/div[1]/p[5]/input  robot test
        Click Button  xpath://*[@id="content"]/div/form/div[2]/input[2]

        #This is for vehicle deleting
        Click Link  xpath://*[@id="navigation"]/ul/li[1]/a
        Click Link  xpath://*[@id="content"]/div/div[2]/table/tbody/tr[10]/td[5]/a[1]
        handle alert  dismiss
        # for hire approving request
        Click Link  xpath://*[@id="navigation"]/ul/li[2]/a
        Click link  xpath://*[@id="content"]/div/div[2]/table/tbody/tr[17]/td[7]/a[1]
        handle alert  accept
        sleep  5s
        #for deleting hire request
        Click Link  xpath://*[@id="content"]/div/div[2]/table/tbody/tr[26]/td[7]/a[2]
        sleep  5s
        # for messages
        Click Link  xpath://*[@id="navigation"]/ul/li[3]/a
        #for deleting message
        Click Link  xpath://*[@id="content"]/div/div[2]/table/tbody/tr[5]/td[5]/a[1]
        #handle alert  accept  #for accepting delete
        handle alert  dismiss  #for dismissing delete
        sleep  2s

        # for logout
        Click Link  xpath://*[@id="top-navigation"]/a
        sleep  3s
        [TearDown]  Test TearDown

*** Keywords ***
Test Setup
     Open Browser  ${url}  ${browser}


Test teardown
    Close browser