<?php
include_once("header.php");
$username = $_SESSION['user_name'];
?>
 



  <div class="container text-center">
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
      <a class="btn btn-outline-primary" href="logout.php">Log out</a>
      <a href="logout.php" class="logout-btn btn btn-danger">Logout</a>
    </div>

 
 
    <div class="tableContainer">
  <table>
    <caption>
      This is a descriptive table caption.
    </caption>
    <thead>
      <tr class="columnHeaders">
        <th class="columnHeader emptyCell" title="Empty cell"></th>
        <th scope="col" class="columnHeader">Table header cell</th>
        <th scope="col" class="columnHeader">Table header cell</th>
        <th scope="col" class="columnHeader">Table header cell</th>
        <th scope="col" class="columnHeader">Table header cell</th>
      </tr>
    </thead>
    <tbody>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 1</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 1</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 2</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 2</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->     
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 3</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 3</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 4</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 4</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 5</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 5</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 6</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 6</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 7</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 7</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 8</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 8</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 9</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 9</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 10</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 10</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 11</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 11</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 12</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 12</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 13</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 13</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 14</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 14</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 15</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 15</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 16</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 16</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 17</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 17</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 18</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 18</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 19</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 19</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
      <!-- Start: This is the mobile view column group -->
      <tr class="mobileColumnGroup">
        <th scope="colgroup" colspan="4"><span>Mobile column group 20</span></th>
      </tr>
      <!-- End: This is the mobile view column group -->
      <tr class="tableBodyRow">
        <th scope="row" class="rowHeader">Desktop row header 20</th>
        <td>Table data cell</td>
        <td>
          <span title="Feature is included" class="featureCheck">✔</span>
        </td>
        <td>Table data cell</td>
        <td>
          <span title="Feature is not included" class="featureX">✘</span>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="horizontal-scroller">
    <div class="horizontal-scroller-content"></div>
  </div>
</div>
  <br />


<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
  try {
    var compTable = document.querySelector(".tableContainer");
    if (compTable) {
      var tableBodyRowData = compTable.querySelectorAll(".tableBodyRow td, .tableBodyRow th");
      var caption = compTable.querySelector("caption");
      var captionHeight = caption ? caption.offsetHeight : 0;
      var compTableBody = compTable.querySelector("tbody");
      var compTableHead = compTable.querySelector("thead");
      var columnHeaders = compTable.querySelectorAll(".columnHeader");
      var columnHeadersRow = compTableHead.querySelector(".columnHeaders");
      var columnHeadersNotEmpty = compTableHead.querySelectorAll(".columnHeader:not(.emptyCell)");
      var horizontalScroller = compTable.querySelector(".horizontal-scroller");
      var horizontalScrollerContent = horizontalScroller.querySelector(".horizontal-scroller-content");
      var originalTablePosition = "";

      function checkTableOffset() {
        var compTableRect = compTable.getBoundingClientRect();
        var compTableHeadRect = compTableHead.getBoundingClientRect();
        var compTableBodyRect = compTableBody.getBoundingClientRect();
        var compTableHeadRowRect = columnHeadersRow.getBoundingClientRect();
        horizontalScroller.style.left = compTableRect.left + "px";
        horizontalScroller.style.width = compTableRect.width + "px";
        horizontalScrollerContent.style.width = compTable.scrollWidth + "px";
        if (compTableRect.top <= 0 && compTableRect.height-50 > window.innerHeight) {
          calculateColumnHeaderWidthsAndPos(compTableRect, compTableHeadRect, compTableBodyRect);
        } else if (compTableBodyRect.top > compTableHeadRect.bottom) {
          resetTable();
        }

        if (compTableRect.bottom <= window.innerHeight || compTableRect.top > window.innerHeight) {
          horizontalScroller.style.visibility = "hidden";
        } else if (compTableRect.top <= window.innerHeight && compTable.clientWidth < compTable.scrollWidth) {
          horizontalScroller.style.visibility = "visible";
        }

        if (compTableRect.bottom <= compTableHeadRect.bottom && !Array.from(compTableHead.classList).includes("atBottom")) {
          compTableHead.classList.add("atBottom");
        } else if (compTableHeadRect.top >= 0) {
          compTableHead.classList.remove("atBottom");
        }
      }

      function scrollColumnHeader(compTable) {
        compTableHead.scrollLeft = compTable.scrollLeft;
      }

      function setColWidths(compTableRect) {
        compTableHead.style.width = compTableRect.width + "px";
        compTableHead.style.left = compTableRect.left + "px";
        for (let i = 0; i < columnHeaders.length; i++) {
          var tableBodyRowDataRect = tableBodyRowData[i].getBoundingClientRect();
          if (Array.from(compTableHead.classList).includes("stickyHeader")) {
            columnHeaders[i].style.minWidth = getComputedStyle(tableBodyRowData[i]).width;
          } else {
            columnHeaders[i].style.minWidth = "initial";
          }
        }
      }

      function calculateColumnHeaderWidthsAndPos(compTableRect, compTableHeadRect, compTableBodyRect) {
        compTableHead.classList.add("stickyHeader");
        scrollColumnHeader(compTable);
        setColWidths(compTableRect);

        var xMatrix = parseFloat(getComputedStyle(compTableBody).transform.substring(getComputedStyle(compTableBody).transform.indexOf("(")+1, getComputedStyle(compTableBody).transform.lastIndexOf(")")).split(",")[5]);
        if ((xMatrix == 0 || getComputedStyle(compTableBody).transform == 'none')) {
          compTableBody.style.transform = "translateY(" + (compTableHead.offsetHeight - captionHeight) + "px)";
          compTable.style.paddingBottom = (compTableHead.offsetHeight - captionHeight) + "px";
        }
      }

      function resetTable() {
        compTableHead.classList.remove("stickyHeader");
        compTableBody.style.transform = "translateY(0px)";
        compTable.style.paddingBottom = "0px";
      }

      window.addEventListener("scroll", function() {
        checkTableOffset();
      });

      window.addEventListener("resize", function () {
        resetTable();
        checkTableOffset();
      });

      compTable.addEventListener("scroll", function(e) {
        if (Array.from(compTableHead.classList).includes("stickyHeader") && !Array.from(compTableHead.classList).includes("atBottom")) {
          scrollColumnHeader(e.target);
        }
        horizontalScroller.scrollLeft = e.target.scrollLeft;
      });

      horizontalScroller.addEventListener("scroll", function(e) {
        if (Array.from(compTableHead.classList).includes("stickyHeader") && !Array.from(compTableHead.classList).includes("atBottom")) {
          scrollColumnHeader(e.target);
        }
        compTable.scrollLeft = e.target.scrollLeft;
      });

      compTableHead.addEventListener("scroll", function(e) {
        horizontalScroller.scrollLeft = e.target.scrollLeft;
        compTable.scrollLeft = e.target.scrollLeft;
      });

      var compTableRect = compTable.getBoundingClientRect();
      setColWidths(compTableRect);
      checkTableOffset();
    }
  } catch(error) {
    console.log(error);
  }
});   
</script>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
