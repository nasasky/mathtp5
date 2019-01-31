// pages/mistakes/mistakes.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    answer: '',
    content: '',
    true_select: '',
    math_id: '',
    dataInfo: [],
    dataNextInfo: [],
    nextData_es:[],
    showView: "",
    showNextView:""
  },

  /*下一题*/
  nextBtn: function () {
    var nextData_s = this.data.nextData_es;
   // console.log(nextData_s);
    var that = this;
   //console.log(nextData_s);
   // console.log(nextData_s.length);
    /*判断，如何数组长度小于1或者等于1，pop()函数会执行错误*/
    if (nextData_s.length > 1){
      var nextDatas = JSON.stringify(nextData_s)
     // console.log(nextDatas+'===');
      wx.redirectTo({
        url: '../mistakes1/mistakes1?nextDatas=' + encodeURIComponent(nextDatas)
      })
      //that.data.showView=false;
    }else{
      var nextDatas = JSON.stringify(nextData_s)
      wx.redirectTo({
        url: '../mistakes1/mistakes1?nextDatas=' + encodeURIComponent(nextDatas)
      })
      /*此时说明这是最后一条错误数据，返回首页*/
    }
    // var nextDatas = JSON.stringify(nextData_s.pop())
  },

  /*返回首页*/
  redirectBtn:function(){
    wx.redirectTo({
      url: '../result/result'
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var nextDataes = JSON.parse(decodeURIComponent(options.nextDatas));
    this.data.nextData_es = nextDataes;
    console.log(nextDataes);
    if (nextDataes.length < 2){
      this.setData({
        showView: true
      });
    }else{
      this.setData({
        showNextView: true
      }); 
    }
    //console.log(nextDataes);
    var nextData = nextDataes.pop();
   // console.log(nextData);
    // var nextDataes = decodeURIComponent(nextData);
    // this.getFalseInfo(nextDataes);
    var answers = nextData.answer;
    var contents = nextData.content;
    var true_selects = nextData.true_select;
    var math_ids = nextData.math_id;
    var result_as = nextData.result_a;
    var result_bs = nextData.result_b;
    var result_cs = nextData.result_c;
    var result_ds = nextData.result_d;
    //console.log(math_ids);
    // console.log(dataInfo);
    // console.log(dataInfos);
    // console.log(true_selects);
    this.setData({
      answer: answers,
      content: contents,
      true_select: true_selects,
      math_id: math_ids,
      result_a: result_as,
      result_b: result_bs,
      result_c: result_cs,
      result_d: result_ds,
    });

  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})