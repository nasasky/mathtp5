// pages/test2/test2.js
Page({

  /**
   * 页面的初始数据
   */
  data: {
    id:""
  },

  radioChange: function (e) {
 
    var ids = this.data.id;
   // console.log(ids)
    /*判断，如果到达第十道题时，跳转到结果页*/
    if (ids > 10) {

      //console.log('this is 10');
      wx.redirectTo({
        url: '../result/result'
      })
      var saveid = --this.data.id;
      wx.request({
        url: 'https://ah.nvli.club/admin/math_nums/save_answer',
        data: {
          saveid: saveid,
          answer: e.detail.value
        },
        success(res) {
         // console.log(res.data)
        }
      })
    }else{
      //console.log('通过。。');
      wx.redirectTo({
        url: '../test2/test2?id=' + ids
      })
      var saveid = --this.data.id;
      wx.request({
        url: 'https://ah.nvli.club/admin/math_nums/save_answer',
        data: {
          saveid: saveid,
          answer: e.detail.value
        },
        success(res) {
          //console.log(res.data)
        }
      })
    }
  },

  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (options) {
    var id = options.id
    var that = this;
    wx.request({
      url: 'https://ah.nvli.club/admin/math_nums/get_maths_byid', 
      data: {
        id: id
      },
      success(res) {
        that.data.id = ++id
        // console.log(res.index)
        that.setData({
        
          mathsNumById: res.data.mathsNumById
        });
       
      }
    })

              
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