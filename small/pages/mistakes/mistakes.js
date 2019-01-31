// pages/mistakes/mistakes.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    answer:'',
    content:'',
    true_select:'',
    math_id:'',
    dataInfo:[],
    dataNextInfo:'',
  },

  /*下一题*/
  nextBtn:function(){
    var nextData = this.data.dataNextInfo;
    var nextDatas = JSON.stringify(nextData)
    wx.redirectTo({
      url: '../mistakes1/mistakes1?nextDatas=' + encodeURIComponent(nextDatas)
    })
    //this.getFalseInfo();
  },



  /*获取错题集*/
  getFalseInfo: function (falseNums){
    var that = this
    wx.request({
      url: 'https://ah.nvli.club/admin/math_nums/get_false_subject',
      data: {
        falseNums: falseNums
      },
      success(res) {
        //console.log(res.data);
       // that.data.id = ++id
  
        var dataInfo= res.data.pop();
       //console.log(dataInfo);
       // var dataInfos= res.data.pop();
       //var true_selects = res.data.pop().true_select;
        //var math_ids = res.data.pop().math_id;
        //var contents = res.data.pop().content;
       var  answers = dataInfo.answer;
        var contents = dataInfo.content;
        var true_selects = dataInfo.true_select;
        var math_ids = dataInfo.math_id;
        var result_as = dataInfo.result_a;
        var result_bs = dataInfo.result_b;
        var result_cs = dataInfo.result_c;
        var result_ds = dataInfo.result_d;

        that.setData({
          answer: answers,
          content: contents,
          true_select: true_selects,
          math_id: math_ids,
          result_a: result_as,
          result_b: result_bs,
          result_c: result_cs,
          result_d: result_ds,
          dataNextInfo: res.data,
         
        });
       
      }
    })
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var falseNums = options.falseNum
    //console.log(options.falseNum);
    this.getFalseInfo(falseNums);
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