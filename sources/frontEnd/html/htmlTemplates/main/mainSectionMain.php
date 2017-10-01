<div class="pageOneDivClass textDarkBackgroundClass">

    <div class="paneWideDivClass flexOneClass columnClass">

        <div class="flexOneClass rowClass paneWideDivClass">

            <div class="flexOneClass rowClass paddingFillerClass">

                <form id="searchFormID"
                      class="searchFormClass"
                      method="post"
                >

                    <label onclick="ft_searchButton()"
                    >

                        <i class="fa fa-search"></i>
                    </label>
                    <input type="search"
                            placeholder="Search"
                            id="searchFormID"
                            class="w3-theme-l1 w3-hover-text-theme"
                    />
                </form>
            </div>

            <div class="w3-hover-theme paddingFillerClass" onclick="ft_notificationsPageScrollButton()"
            >

                <i class="fa fa-bell"></i>

                <b>4</b>
            </div>

            <div class="flexOneClass paddingFillerClass">

                <div class="fillerClass"></div>
                <div class="buttonClass darkButtonClass w3-hover-theme cursorPointerToggleClass"
                     onclick="ft_signOutButton()"
                >

                    Sign Out
                </div>
            </div>
        </div>

        <div class="paneWideDivClass flexOneClass dashboardClass rowClass">

            <div class="flexOneClass alignContentCenterClass">

                <div class="buttonClass darkButtonClass w3-hover-theme"
                     id="galleryButtonID"
                >

                    <i class="fa fa-image"
                       style="margin: 10px;"
                    >
                    </i>
                    <label for="galleryButtonID">Gallery</label>
                </div>
            </div>
            <div class="flexOneClass alignContentCenterClass">

                <h4>

                    <b>Username</b>
                </h4>
            </div>
            <div class="flexOneClass alignContentCenterClass">

                <h4 id="trendingID">

                    Trending: #canvas
                </h4>
            </div>
        </div>

        <div class="paneWideDivClass flexOneClass alignContentCenterClass">

            <div class="flexOneClass alignContentCenterClass">

                <img src="#"
                     class="smallCardClass w3-theme-l1"
                >
            </div>

            <div class="flexOneClass statusClass alignContentCenterClass">

                <div class="paddingFillerClass">

                    Fat cats are always blue.
                </div>
                <label class="paddingFillerClass">

                    <i class="cursorPointerToggleClass w3-hover-theme fa fa-edit"></i>
                </label>
            </div>

            <div class="flexOneClass alignContentCenterClass"></div>
        </div>
    </div>

    <div class="occupationClass rowClass statusClass">

        <div>

            Occupation: Nurse
        </div>
        <label class="paddingFillerClass">

            <i class="fa fa-edit"></i>
        </label>
    </div>
</div>

<div class="pageTwoDivClass">

    <div class="homeMenuBarClass">

        <div class="tagsDivClass w3-theme-d2">#Canvas <b> <i class="fa fa-close"></i></b></div>

        <div class="buttonClass darkButtonClass w3-hover-theme"
             onclick="ft_signOutButton()"
        >

            Sign Out
        </div>
    </div>
    <div class="paneWideDivClass flexOneClass">

        <div class="flexOneClass alignContentCenterClass columnClass w3-hover-theme">

            <i class="fa fa-comments paddingFillerClass"
               style="font-size: 72px;"
            ></i>
            <div class="paddingFillerClass">124</div>
        </div>

        <div class="flexOneClass alignContentCenterClass columnClass w3-hover-theme">

            <i class="fa fa-bell paddingFillerClass"
               style="font-size: 72px;"
            ></i>
            <div class="paddingFillerClass">9</div>
        </div>

        <div class="flexOneClass alignContentCenterClass columnClass w3-hover-theme">

            <i class="fa fa-envelope paddingFillerClass"
               style="font-size: 72px;"
            ></i>
            <div class="paddingFillerClass">23</div>
        </div>


    </div>
    <div class="paneWideDivClass flexOneClass alignContentCenterClass">

        <div class="flexOneClass alignContentCenterClass"></div>

        <div class="flexOneClass alignContentCenterClass columnClass">

            <i class="homeDownArrowClass fa fa-angle-down"
               style="font-size: 72px;"
            ></i>
        </div>

        <div class="flexOneClass alignContentCenterClass columnClass">

            <div class="paddingFillerClass"><b>Followers: </b>13</div>
            <div class="paddingFillerClass"><b>Following: </b>83</div>
        </div>
    </div>
</div>

<div class="pageThreeDivClass">

    <div class="paneWideDivClass">

        <div class="flexOneClass paddingFillerClass">

            <i class="fa fa-bars paddingFillerClass w3-hover-theme"
               onclick="ft_filterMenuButton()"
            ></i>
            <div class="w3-hover-theme paddingFillerClass" onclick="ft_notificationsPageScrollButton()"
            >

                <i class="fa fa-bell"></i>

                <b>4</b>
            </div>
        </div>

        <div class="fillerClass"></div>

        <div class="flexOneClass">

            <div class="buttonClass darkButtonClass w3-hover-theme"
                 onclick="ft_signOutButton()"
            >

                Sign Out
            </div>
        </div>
    </div>

    <h3><b>Recommendations</b></h3>

    <div class="flexOneClass alignContentCenterClass">

        <div class="filterMenuClass"
             id="filterMenuID"
             style="display: none;"
        >

            <form class="filterMenuFormClass w3-theme-d2 textLightBackgroundClass alignContentCenterClass columnClass">

                <div class="rowClass">

                    <div class="paddingFillerClass">Order By:</div>
                    <select class="w3-theme-d2" required>

                        <option value="ageAsc">Age Asc</option>
                        <option value="ageDesc">Age Desc</option>
                        <option value="frAsc">FR Asc</option>
                        <option value="frDesc">FR Desc</option>
                    </select>
                </div>
                <hr>
                <div class="rowClass">

                    <div class="paddingFillerClass">Display Only:</div>
                    <select class="w3-theme-d2" required>

                        <option value="male">

                            Male
                        </option>
                        <option value="female">Female
                        </option>
                        <option value="both">Both</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <hr>

                <div class="columnClass alignContentCenterClass">

                    <label><h4>Age Difference</h4></label>
                    <input type="text"
                           placeholder="Min 18"
                           class="w3-theme-d2"
                    >
                    <input type="text"
                           placeholder="Max 250"
                           class="w3-theme-d2"
                    >
                </div>
                <hr>
                <div class="columnClass alignContentCenterClass">

                    <label>Search Tag</label>
                    <input type="text"
                           class="w3-theme-d2"
                           placeholder="#paintbrush"
                    >
                </div>

                <hr>

                <div class="buttonClass w3-theme-d2 w3-hover-theme paddingFillerClass">

                    Go
                </div>
            </form>
        </div>

        <i class="fa fa-angle-left w3-hover-theme paddingFillerClass"
           style="font-size: 48px; border-top-left-radius: 10px"
        ></i>

        <div class="infoCardClass columnClass">

            <div class="rowClass">

                <div class="paddingFillerClass">2.9</div>
                <i class="fa fa-close paddingFillerClass"
                ></i>
            </div>

            <div class="columnClass">

                <div class="smallCardClass w3-theme-d2 w3-hover-theme">

                    Card One
                </div>

                <div class="rowClass alignContentCenterClass paddingFillerClass">

                    <div class="paddingFillerClass">

                        25
                    </div>

                    <i class="fa fa-male paddingFillerClass"></i>
                </div>
            </div>
        </div>

        <div class="infoCardClass columnClass">

            <div class="rowClass">

                <div class="paddingFillerClass">1.2</div>
                <i class="fa fa-close paddingFillerClass"></i>
            </div>

            <div class="columnClass">

                <div class="smallCardClass w3-theme-d2 w3-hover-theme">

                    Card Two
                </div>

                <div class="rowClass alignContentCenterClass paddingFillerClass">

                    <div class="paddingFillerClass">

                        21
                    </div>

                    <i class="fa fa-female paddingFillerClass"></i>
                </div>
            </div>
        </div>

        <i class="fa fa-angle"></i>

        <div class="infoCardClass columnClass">

            <div class="rowClass">

                <div class="paddingFillerClass">4.8</div>
                <i class="fa fa-close paddingFillerClass"></i>
            </div>

            <div class="columnClass">

                <div class="smallCardClass w3-theme-d2 w3-hover-theme">

                    Card Three
                </div>

                <div class="rowClass alignContentCenterClass paddingFillerClass">

                    <div class="paddingFillerClass">

                        27
                    </div>

                    <i class="fa fa-female paddingFillerClass"></i>
                </div>
            </div>
        </div>

        <i class="fa fa-angle-right w3-hover-theme paddingFillerClass"
           style="font-size: 48px; border-top-right-radius: 10px"
        ></i>
    </div>
</div>

<div class="pageFourDivClass textDarkBackgroundClass">

    <div class="paneWideDivClass">

        <div class="flexOneClass paddingFillerClass">

            <i class="fa fa-home paddingFillerClass w3-hover-theme"></i>
            <div class="w3-hover-theme paddingFillerClass" onclick="ft_notificationsPageScrollButton()"
            >

                <i class="fa fa-bell"></i>

                <b>4</b>
            </div>
        </div>

        <div class="fillerClass"></div>

        <div class="flexOneClass">

            <div class="buttonClass darkButtonClass w3-hover-theme"
                 onclick="ft_signOutButton()"
            >

                Sign Out
            </div>
        </div>
    </div>

    <div class="flexOneClass paddingFillerClass"><h3><b>Biography</b></h3></div>

    <hr/>

    <div class="flexOneClass biographyClass rowClass statusClass">

        <div class="paddingFillerClass">

            I am a drifter in space time code.
        </div>
        <label class="paddingFillerClass">

            <i class="fa fa-edit w3-hover-theme"></i>
        </label>
    </div>

    <div class="paneWideDivClass flexOneClass w3-theme-d5 alignBottomClass">

        Author : mmakwakw
    </div>
</div>
